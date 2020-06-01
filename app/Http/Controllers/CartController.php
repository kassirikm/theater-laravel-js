<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function store(request $request)
    {
       

        Cart::add($request->id, $request->title,1, $request->price);

        return back()->with('success','Le produit a bien été ajouté.');

    }
}
