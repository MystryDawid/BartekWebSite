<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
            'category' => 'required',
            'description' => 'required',
            'imgs[]' => 'required',
            'imgs[]' => 'image',
        ]);
        $Oncarousel = 0;
        if($request->input('Oncarousel')){
            $Oncarousel = 1;
        }
        Post::insert([
            'Nazwa' => $request->input('nazwa'),
            'Category' => $request->input('category'),
            'Description' => $request->input('description'),
            'Oncarousel' => $Oncarousel
            ]);
        $id = Post::max("id");
        $a = 1;
        
        foreach($request->file()['imgs'] as $image){
            // cała nazwa pliku
            $fileNameWithExt = $image->getClientOriginalName();
            //nazwa pliku
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //rozszerzenie pliku
            $extension = pathinfo($fileNameWithExt, PATHINFO_EXTENSION);
            //generowanie nowej nazwy pliku
            $fileNameToStore = $fileName."_".time().".".$extension;
            //zapisywanie pliku w storage i ścieżki
            $path = 'public/storage/images/'.$fileNameToStore;
            $image->storeAs('public/images',$fileNameToStore);

            images::insert([
                'path' => $path,
                'ProductID' => $id,
                'main' => $a
                ]);
            if($a){
                $a = 0;
            }
        }
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


    public function DisplayProductForAdmin()
    {
            $categories =  Category::all();
            $products = POST::GetProductAll();
            return view('pages.paginationA')->with('categoris',$categories)->with('products',$products);
    }

    public function StartEditProduct($id)
    {
            $categories =  Category::all();
            $product = POST::GetProduct($id);
            
            return view('pages.ProductEdit')
                ->with('categoris',$categories)
                ->with('product',$product);
    }

    public function DeleteProduct($id)
    {
        Post::where('id', $id)->delete();
        Storage::deleteDirectory("public/images/".$id);
            return redirect('BartekAdminUrban')->with('success',"Usunięto produkt.");;
    }


    public function searchA(Request $request){
        $this->validate($request, [
            'nazwa' => 'required'
        ]);
            
            $categories =  Category::all();
            $searchResult = POST::GetProductALike();
            return view('pages.paginationA')->with('categoris',$categories)->with('products',$searchResult);
    
    }

}
