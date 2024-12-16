<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefmetController extends Controller
{
    //
    public function home(){

 
        return view('home');
    }
    public function about(){

        $active = 'about';
        return view('about',compact('active'));
    }
    public function product(){

        $active = 'active';
        return view('product',compact('active'));
    }
    public function contact(){
        return view('contact');
    }

    //
    public function whatwebuy(){
        return view('whatwebuy');
    }
    public function whatwesell(){
        return view('whatwesell');
    }
    public function serviceweoffer(){
        return view('serviceweoffer');
    }
    public function listapprovel(){
        $active = 'listapprovel';
        return view('listapprovel',compact('active'));
    }

    // product
    public function zslagcan(){
        return view('product.z-slag-can');
    }
    public function zslagcaal50(){
        return view('product.Z-Slag-CA-AL50');
    }
    public function zslagcaal20(){
        return view('product.z-slag-ca-al20');
    }
    public function slagkills(){
        return view('product.slag-kill10');
    }
    public function ferronickel(){
        return view('product.ferro-nickel');
    }
    public function ferronickelmoly(){
        return view('product.ferro-nickel-moly');
    }
    public function calciummolybdatecm(){
        return view('product.calcIum-molybdate-cm');
    }
    public function ferrovanadium(){
        return view('product.ferro-vanadium');
    }
    public function nickleoxidecobaltoxide(){
        return view('product.nickle-oxide-cobalt-oxide');
    }
    public function tungstenvanaduimpent(){
        return view('product.tungsten-oxide-vanadium-pentoxide');
    }
}
