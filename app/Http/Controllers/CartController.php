<?php

namespace App\Http\Controllers;

use App\Show;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


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
        }*/
        
        
        $show =  Show::find($request->show_id);

        Cart::add($show->id, $show->title,1, $show->price)
                ->associate('App\Show');

        return back()->with('success','Le produit a bien été ajouté.');

    }
    
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        
        return back()->with('success', 'L\'article a bien été supprimé.');
    }
}
