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

    public function AddProduct()
    {
        $categories =  Category::all();
        return view('pages.productform')->with('categoris',$categories);
    }


    public function StartAddCategory()
    {
            $categories =  Category::all();
            return view('pages.categoryform')->with('categoris',$categories);
    }

    public function AddCategory(Request $request)
    {
        Category::insert(['Name' => $request->input('Kategoria')]);
        return redirect('BartekAdminUrban');
    }

    public function StartEditCategory()
    {
         $categories = Category::all();
         return view('pages.allCategories')->with('categoris',$categories);
         
    }

    public function EditCategory($id)
    {

        $categories =  Category::all();
        return view('pages.categoryEdit')
                ->with('categoris',$categories)
                ->with('id',$id);
    }

    public function UpdateCategory(Request $request)
    {
        Category::where('id', $request->idC)
            ->update(['Name' => $request->Kategoria]);
            return redirect('BartekAdminUrban');

    }

    public function DeleteCategory($id)
    {
        Category::where('id', $id)->delete();
            return redirect('BartekAdminUrban');

    }

    public function StartAddProduct()
    {
            $categories =  Category::all();
            return view('pages.productform')->with('categoris',$categories);
   
    }


    public function StartEditProduct()
    {
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
    }

    public function StartDelProduct()
    {
            $categories =  Category::all();
            return view('layouts.adminindex')->with('categoris',$categories);
    }


}
