<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Modeller çağrılır.
use App\Models\Models\Category;
use App\Models\Article;

class Homepage extends Controller
{
    public function index()
    {
        $data['articles']=Article::orderBy('created_at','DESC')->get();
        
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
}
