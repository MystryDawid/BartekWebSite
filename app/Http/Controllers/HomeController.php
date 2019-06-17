<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories =  Category::all();
        $products = POST::GetProductAll();
        return view('pages.paginationA')->with('categoris',$categories)->with('products',$products);
    }

}
