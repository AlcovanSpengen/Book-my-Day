<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;
use App\Category;
use App\Author;
use App\Sub_Category;
use App\Genre;
use App\Cart;
use Image;
use Storage;

class ProductController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $authors = Author::orderby('id', 'desc')->paginate(10);
       //return a view and pass in the above variable
       return view('products.index')->withProducts($products)->withAuthors($authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Sub_Category::all();
        $genres = Genre::all();

        return view('products.create')->withCategories($categories)->withSubcategories($subcategories)->withGenres($genres);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
            'title' => 'required|max:255',
            'ISBN' => 'required|max:20|min:10|unique:products',
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'abstract' => 'required|min:20'
        ));
        //store in the database

        $product = new Product;

        $product->title = $request->title;
        $product->ISBN = $request->ISBN;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->abstract = $request->abstract;

        $product->save();

        $product->genres()->sync($request->genres, false);

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
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
}
