<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Order;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $ids = Category::get3categorys();
        $products = Post::advertProducts($ids);
        return view('pages.index')
                ->with('categoris',Category::all())
                ->with('carousel',Post::where('Oncarousel',true)->get())
                ->with('products', $products);
    }

    public function product($id){
        $product = Post::GetProduct($id);
        $ids = Category::get3categorys();
        $products = Post::advertProducts($ids);
        $images = Post::GetProductAllPhotos($id);
        return view('pages.product')
                ->with('products', $products)
                ->with('categoris',Category::all())
                ->with("product",$product)
                ->with("images",$images);
    }

    public function search(Request $request){
        $this->validate($request, [
            'nazwa' => 'required'
        ]);
            
            $categories =  Category::all();
            $searchResult = POST::GetProductALike();
            return view('pages.pagination')->with('categoris',$categories)->with('products',$searchResult);
    
    }

    public function category($id){
            $categories =  Category::all();
            $searchResult = POST::GetProductCategory($id);
            return view('pages.pagination')->with('categoris',$categories)->with('products',$searchResult);
    
    }

   
}
