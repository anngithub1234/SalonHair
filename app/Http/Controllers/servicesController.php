<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class servicesController extends Controller
{

        public function uu(){

           // $ser = service::get();
           // return view('staff',compact('ser'));


        }
    /*public function create()
    {

        return view('stafffunction');
    }*/

    /**
     * Store a newly created resource in storage.
     */
    public function yy(Request $request)
    {
        /* $servicename=$request->servicename;
         $category=$request->category;
         $price=$request->price;
         $discount=$request->discount;
         $image=$request->image;
         $s=new service();
         $s->servicename=$servicename;
         $s->category=$category;
         $s->price=$price;
         $s->discount=$discount;
         $s->image=$image;
         $s->save();
         return redirect()->back();*/

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
