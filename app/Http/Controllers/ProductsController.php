<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Will only display products page if user has logged in.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $products = Product::orderby("name", "asc")->get();
        return view('products', compact("products"));
    }

}
