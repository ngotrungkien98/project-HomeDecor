<?php

namespace App\Http\Controllers;
use App\News;
use App\Product;

use Illuminate\Http\Request;

class HomeNavController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }

    public function news(){
        return view('news');
        //tin tuc
    }
    public function readnews(Product $product, Request $request)
    {
        $id = $request-> id;
        $news = News::where('id',$id)->get();
        return view('readnews', compact('news'));
    }

}
