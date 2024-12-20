@extends('layouts.main_master')
@section('title','What We Buy')
@section('content')
<!-- Main Content Section -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 green position-relative main-box" style="">
            <div class="box mt-5 position-absolute translate-middle" style="">
                <img src="{{asset('image/what-we-buy.png')}}" alt="" class="img-fluid imgsize">
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
<!-- what we buy info -->
<section class="container textinfo ">
    <p class="h1  text-green textinfo-h1 pleft">WHAT WE BUY</p>
    <!-- <p class="h1 text-center text-opacity mt-2">The Visionary Drive of Mr. Arnab Roy</p> -->
     <p class="h4 pleft">We are actively seeking material containing.</p>
     <p class="h4 pleft">Nickel, Cobalt, Molybdenum, Vanadium, Tungsten, and Zinc in the following forms:</p>
     <ul class="uleft">
        <li class="h4  textjustify textinfo-h1-p">Spent catalysts.</li>
        <li class="h4  textjustify textinfo-h1-p">Powder, Sludge, Ash, Slag.</li>
        <li class="h4  textjustify textinfo-h1-p">Stainless Steel Fines, Turnings, Filters,</li>
        <li class="h4  textjustify textinfo-h1-p">HSS Grinding Dust and Mill Scale.</li>
        <li class="h4  textjustify textinfo-h1-p">Black Mass, PET Industry Cobalt and manganese left over ash from Industry's incinerator.</li>
        <li class="h4  textjustify textinfo-h1-p">Vanadium Ash from Gasifiers.</li>
        <li class="h4  textjustify textinfo-h1-p">Electroplating Scrap,</li>
        <li class="h4  textjustify textinfo-h1-p">Quality rejects and ETP sludge from principal Catalyst Manufacturers.</li>
        <li class="h4  textjustify textinfo-h1-p">Industrial Sludge having Nickel, Cobalt, Molybdenum, Vanadium, Tungsten, and Zinc.</li>
     </ul>
    
</section>
<div style="margin: 12% 0 12% 0;">
    <hr>
</div>
<!-- what we buy info -->
    
@endsection