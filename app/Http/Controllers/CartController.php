<?php

namespace App\Http\Controllers;

use App\Show;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Show;

class CartController extends Controller
{

    public function index()
    {

        return view ('cart.index');
    }
    
    public function store(Request $request)
    {
        /*$duplicata= Cart::search(function($cartItem, $rowId)use($request){
            return $cartItem->id = $request ->product_id;
        });
 
        if ($duplicata->isNotEmpty()){
            return back()->with('success','Le produit a déjà été ajouté.');
        }
        $show =  Show::find($request->product_id);*/
       

        Cart::add($request->id, $request->title,1, $request->price)
                ->associate('App\Show');

        return back()->with('success','Le produit a bien été ajouté.');

    }
}
