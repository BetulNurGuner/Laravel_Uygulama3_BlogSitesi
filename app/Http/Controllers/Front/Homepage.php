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
}
