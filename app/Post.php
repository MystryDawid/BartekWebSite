<?php

namespace App;
use File;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
//$files = Storage::files($directory);


class Post extends Model
{
    public $timestamps = false;
    public static function advertProducts($ids){
        $date = [];
        foreach($ids as $id){
            $b = Post::where('Category',$id['id'])->get()->take(3);
            array_push($date,Post::where('Category',$id['id'])->get()->take(3));
        }
        return $date;
    }

    public static function GetProduct($id){ 
        return  Post::where('id',$id)->get()[0];

    }

    public static function GetProductAllPhotos($id){ 
        $files = File::files(public_path("images/$id/"));
        $filecount = 0;
        
        if ($files !== false) {
            $filecount = count($files);
        }
        
        return $filecount;
    }


}