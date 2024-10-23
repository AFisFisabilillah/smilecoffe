<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $categories = Categories::all();
        $products = Products::all();
        return view("menu",['title' => 'Home Page' , 'categories' => $categories, 'products' => $products] );
    }

    public function menuCategory(Categories $category){
         
        $product = $category->products;
        return view('categoryMenu', ['category' => $category ,  'products'=> $product] );
    }

    public function viewProduct(Products $product){
        return view('product', ['product'=> $product]);
    }
    

    
}
