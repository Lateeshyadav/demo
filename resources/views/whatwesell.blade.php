@extends('layouts.main_master')
@section('title','What We Sell')
@section('content')
<!-- Main Content Section -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 green position-relative main-box" style="">
            <div class="box mt-5 position-absolute translate-middle" style="">
                <img src="{{asset('image/what-we-sell.png')}}" alt="" class="img-fluid imgsize">
                {{-- <ul class="list-unstyled d-flex justify-content-center btnul position-absolute">
                    <li><a href="#" class="btn btn-green  p-3 px-5 btna btnax">WHAT WE BUY</a></li>
                    <li><a href="#" class="btn btn-green  p-3 px-5  btna btnax">WHAT WE SELL</a></li>
                    <li><a href="#" class="btn btn-green  p-3 btna ">SERVICE WE OFFER</a></li>
                    <li><a href="#" class="btn btn-green  p-3 btna ">LIST OF APPROVALS</a></li>
                </ul> --}}
                <div class="text-about">
                    <h2 class="text-center text-green textinfo-h3 h1-info">Refracast Metallurgicals Pvt.Ltd.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- what we sell info -->
<section class="container textinfo ">
    <p class="h1  text-green textinfo-h1 pleft">WHAT WE SELL</p>
    <!-- <p class="h1 text-center text-opacity mt-2">The Visionary Drive of Mr. Arnab Roy</p> -->
     <!-- <p class="h4">We are actively seeking material containing.</p> -->
     <!-- <p class="h4">Nickel, Cobalt, Molybdenum, Vanadium, Tungsten, and Zinc in the following forms:</p> -->
     <ul class="uleft">
        <li class="h4  textjustify textinfo-h1-p ">FERRO NICKEL</li>
        <li class="h4  textjustify textinfo-h1-p ">FERRO NICKELMOLY</li>
        <li class="h4  textjustify textinfo-h1-p ">CALCIUM MOLYBDATE (CM)</li>
        <li class="h4  textjustify textinfo-h1-p ">FERRO VANADIUM AND VANADIUM-PENTOXIDE</li>
        <li class="h4  textjustify textinfo-h1-p ">VANADIUM-PENTOXIDE ELECTROLYTE GRADE</li>
        <li class="h4  textjustify textinfo-h1-p ">COBALTOXIDE</li>
        <li class="h4  textjustify textinfo-h1-p ">TUNGSTEN OXIDE</li>
        <li class="h4  textjustify textinfo-h1-p ">FERRO TUNGSTEN</li>
        <li class="h4  textjustify textinfo-h1-p ">FERRO MOLYTUNGSTEN.</li>
        <li class="h4  textjustify textinfo-h1-p ">SYNTHETIC SLAG ( SLAG CONDITIONER FOR STEELPLANTS )</li>
        <li class="h4  textjustify textinfo-h1-p ">SLAG KILL100</li>
        <li class="h4  textjustify textinfo-h1-p ">SLAG MASTER</li>
     </ul>
    
</section>
<div style="margin: 12% 0 12% 0;">
    <hr>
</div>
<!-- what we sell info -->

    
@endsection