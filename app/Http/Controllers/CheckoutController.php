<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Show;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         * Redirection si panier vide
         */
        if(Cart::count() <= 0)
        {
            return redirect()->route('shows.index');
        }
        Stripe::setApiKey('sk_test_k5AZLcQoyWIyliBCQSX2PuTX00yWVEsfVt');
        
        $intent = PaymentIntent::create([
          'amount' => Show::first()->price*100,
          'currency' => 'eur',
          // Verify your integration in this guide by including this parameter
          // 'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);        
        
        // Récupérer secret du client
        $clientSecret = Arr::get($intent, 'client_secret');

    return view('checkout.index', [
        'clientSecret' => $clientSecret,
    ]);
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
        Cart::destroy();
        
        $data = $request->json()->all();
        
        return $data['paymentIntent'];
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
}
