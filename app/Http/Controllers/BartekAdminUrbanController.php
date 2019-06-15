<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BartekAdminUrbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::all();
        return view('pages.adminmain')->with('categoris',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function StartAddCategory()
    {
        if(Auth::user()){
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
        }else{
            echo "essa";
        }
        
    }


    public function StartAddProduct()
    {
        if(Auth::user()){
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
        }else{
            echo "Stop it";
        }
    
    }


    public function StartEditProduct()
    {
        if(Auth::user()){
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
        }else{
            echo "Stop it";
        }
        
    }

    public function StartDelProduct()
    {
        if(Auth::user()){
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
        }else{
            echo "Stop it";
        }
    
    }


}
