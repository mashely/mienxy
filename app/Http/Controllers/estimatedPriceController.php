<?php

namespace App\Http\Controllers;

use App\Models\estimatedPrice;
use Illuminate\Http\Request;

class estimatedPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


        $estimatedPrice = new estimatedPrice();
        $estimatedPrice->firstname = $request->input('firstname');
        $estimatedPrice->lastname = $request->input('lastname');
        $estimatedPrice->email = $request->input('email');
        $estimatedPrice->cargotype = $request->input('cargotype');
        $estimatedPrice->countryofOrigin = $request->input('countryoforigin');
        $estimatedPrice->Destination = $request->input('destination');
        $estimatedPrice->quantity = $request->input('quantity');
        $estimatedPrice->weight = $request->input('weight');
        $estimatedPrice->size = $request->input('size');
        
       
        $estimatedPrice->save();
        
        return view('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function show(estimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(estimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(estimatedPrice $estimatedPrice)
    {
        //
    }
}
