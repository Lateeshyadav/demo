<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefmetController extends Controller
{
    //
    public function home(){

        $active = 'home';
        return view('home',compact('active'));
    }
    public function about(){

        $active = 'about';
        return view('about',compact('active'));
    }
    public function product(){

        $active = 'product';
        return view('product',compact('active'));
    }
    public function contact(){
        $active = 'home';
        return view('contact',compact('active'));
    }
    public function suppliers(){
        $active = 'suppliers';
        return view('suppliers',compact('active'));
    }

    //
    public function whatwebuy(){
        $active = 'home';
        return view('whatwebuy',compact('active'));
    }
    public function whatwesell(){
        $active = 'home';
        return view('whatwesell',compact('active'));
    }
    public function serviceweoffer(){
        $active = 'home';
        return view('serviceweoffer',compact('active'));
    }
    public function listapprovel(){
        $active = 'home';
        return view('listapprovel',compact('active'));
    }

    // product
    public function zslagcan(){
        $active = 'product';
        return view('product.z-slag-can',compact('active'));
    }
    public function zslagcaal50(){
        $active = 'product';
        return view('product.Z-Slag-CA-AL50',compact('active'));
    }
    public function zslagcaal20(){
        $active = 'product';
        return view('product.z-slag-ca-al20',compact('active'));
    }
    public function slagkills(){
        $active = 'product';
        return view('product.slag-kill10',compact('active'));
    }
    public function ferronickel(){
        $active = 'product';
        return view('product.ferro-nickel',compact('active'));
    }
    public function ferronickelmoly(){
        $active = 'product';
        return view('product.ferro-nickel-moly',compact('active'));
    }
    public function calciummolybdatecm(){
        $active = 'product';
        return view('product.calcIum-molybdate-cm',compact('active'));
    }
    public function ferrovanadium(){
        $active = 'product';
        return view('product.ferro-vanadium',compact('active'));
    }
    public function nickleoxidecobaltoxide(){
        $active = 'product';
        return view('product.nickle-oxide-cobalt-oxide',compact('active'));
    }
    public function tungstenvanaduimpent(){
        $active = 'product';
        return view('product.tungsten-oxide-vanadium-pentoxide',compact('active'));
    }
}
