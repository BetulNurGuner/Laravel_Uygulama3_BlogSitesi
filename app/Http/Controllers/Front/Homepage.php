<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Modeller çağrılır.
use App\Models\Models\Category;
use App\Models\Article;
use App\Models\Page;

class Homepage extends Controller
{

    public function __construct()
    {
        view()->share('pages',Page::orderBy('order','ASC')->get());
    }
    //construct metod olduğu için tüm fonksiyonlarda geçerli. Hepsine tek tek page tanımlamama gerek kalmadı.


    public function index()
    {
        //$data['articles']=Article::orderBy('created_at','DESC')->get();
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);
        //get değil paginate kullandım sayfalama yapmak için. 1 sayfada max 2 yazı gösterecek. 1 yazarsak paranteze 1 yazı gösterir. 
        //Normalde 3 tane yazı vardı, okçuluk da mesela ama sayfalama da 2 tane yazı olduğu için 3.okçuluk yazısı gitti

        //$data['pages']=Page::orderBy('order','ASC')->get();

        $data['categories']=Category::inRandomOrder()->get();
        return view('front.homepage',$data);
    }

    public function single($category,$slug)
    {
        $category=Category::whereSlug($category)->first() ?? abort(403, 'Böyle bir kategori yok');


        $article=Article::where('slug',$slug)->whereCategoryId($category->id)->first() ?? abort(404, 'Böyle bir yazı bulunamadı');
        //$data['article']=Article::where('slug',$slug)->first() ?? abort(404, 'Böyle bir yazı bulunamadı');

        

        $article->increment('hit');
        //Tıklanma sayısını 1 arrırmak için

        $data['article']=$article;
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.single',$data);
    }

    public function category($slug)
    {
        $category=Category::whereSlug($slug)->first() ?? abort(403, 'Böyle bir kategori bulunamadı.');
        $data['category']=$category;
        //$data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);
        $data['categories']=Category::inRandomOrder()->get(); //yandaki kategori menüsü gelmesi için.
        return view('front.category',$data);
    }

    public function page($slug)
    {
        
        $page=Page::whereSlug($slug)->first() ?? abort(403, 'Böyle bir sayfa bulunamadı.');
        $data['page']=$page;
        //$data['pages']=Page::orderBy('order','ASC')->get();
        return view('front.page',$data);
    }
}
