<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
       
        $validate = $request->validate([
            "id_product" => ["integer"]
        ]);
        
       
        Cart::create([
            "id_user" => auth()->user()->id,
            "id_product" => $validate["id_product"]
        ]);

        return redirect()->route('product', $validate["id_product"])->with("succes" , "products Berhaasil di tambahkan ke Keranjang");
    }
}
