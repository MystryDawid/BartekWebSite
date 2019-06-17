<?php

namespace App;
use File;
use Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\Storage;
//$files = Storage::files($directory);


class Post extends Model
{
    public $timestamps = false;
    public static function advertProducts($ids){
        $date = [];
        foreach($ids as $id){
            $tmp = Post::join('images','posts.Id', '=', 'images.ProductID')
                    ->groupBy('posts.Id')
                    ->having('Category',$id['id'])
                    ->get()->take(3);
            array_push($date,$tmp);
        }
        return $date;
    }

    public static function GetProduct($id){ 
        $products = Post::join('images','posts.Id', '=', 'images.ProductID')
                        ->where('posts.Id','=',$id)
                        ->get();
        return $products;
    }


    public static function GetProductALike(){ 
        $Name = Input::get('nazwa');
        $products = Post::join('images','posts.Id', '=', 'images.ProductID')
                        ->where("Nazwa", "like", "%".$Name."%")->groupBy('posts.Id')->paginate(9);
        $products->appends(request()->query())->links();
        return $products;
    }

    public static function GetProductCategory($id){ 
        $products = Post::join('images','posts.Id', '=', 'images.ProductID')
                            ->where("category", "=", $id)
                            ->groupBy('posts.Id')
                            ->paginate(9);
        $products->appends(request()->query())->links();
        return $products;
    }

    public static function GetProductAll(){ 
        $products = Post::join('images','posts.Id', '=', 'images.ProductID')->groupBy('posts.Id')->paginate(9);
        $products->appends(request()->query())->links();
        return $products;
    }

    public static function GetProductForCarousel(){ 
        $products = Post::join('images','posts.Id', '=', 'images.ProductID')
                        ->groupBy('posts.Id')
                        ->having('Oncarousel','=','true')
                        ->get();
        return $products;
    }


    
    


}
