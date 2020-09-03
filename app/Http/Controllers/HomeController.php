<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Categories;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index1()
    {
        return view('home');
    }

    public function index()
    {
        return view('store');
    }

    public function store()
    {
        if( session('success') )
        {
            toast( session('success'), 'success');
        }

        $sli = banner::all();
        $Category = Categories::all();
        return view('store',compact('Category', 'sli'));
    }

    

}
