<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
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

    public function AddProduct(Request $request)
    {
        $categories =  Category::all();
        $this->validate($request, [
            'nazwa' => 'required',
            'Kategoria' => 'required',
            'description' => 'required',
            'imgs' => 'required',
            'photo' => 'image|mimes:jpeg,jpg'
        ]);
        

            



        return redirect('BartekAdminUrban')->with('success',"Dodano Produkt.");;
    }


    public function StartAddCategory()
    {
            $categories =  Category::all();
            return view('pages.categoryform')->with('categoris',$categories);
    }

    public function AddCategory(Request $request){
        $this->validate($request, [
            'Kategoria' => 'required'
        ]);
        Category::insert(['Name' => $request->input('Kategoria')]);
        return redirect('BartekAdminUrban')->with('success',"Dodano kategorię.");;
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
        $this->validate($request, [
            'Kategoria' => 'required'
        ]);
        Category::where('id', $request->idC)
            ->update(['Name' => $request->Kategoria]);
            return redirect('BartekAdminUrban')->with('success',"Zaktualizowano kategorię.");

    }

    public function DeleteCategory($id)
    {
        Category::where('id', $id)->delete();
        Post::where('Category', $id)->delete();
            return redirect('BartekAdminUrban')->with('success',"Usunięto kategorię.");;

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
