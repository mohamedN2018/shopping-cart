<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Support\Renderable;

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
     * @return Renderable
     */
    public function index()
    {
        $latestProducts = Product::latest()->take(3)->get();

//        return view('home',compact('home'));

        return view('home');
    }

    public function store()
    {


        $latestProducts = Product::latest()->take(8)->get();

        return view('store', compact('latestProducts'));
    }
    public function post() {

        return view('post/post');
    }

    public function chat() {

        return view('Direct-chat/chat');
    }
}
