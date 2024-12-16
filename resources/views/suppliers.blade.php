@extends('layouts.main_master')
@section('title','Suppliers')
@section('content')
<!-- Main Content Section -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 green position-relative main-box" style="">
            <div class="box mt-5 position-absolute translate-middle" style="">
                <img src="{{asset('image/list-of-approvals.png')}}" alt="" class="img-fluid imgsize">
                {{-- <ul class="list-unstyled d-flex justify-content-center btnul position-absolute">
                    <li><a href="#" class="btn btn-green  p-3 px-5 btna btnax">WHAT WE BUY</a></li>
                    <li><a href="#" class="btn btn-green  p-3 px-5  btna btnax">WHAT WE SELL</a></li>
                    <li><a href="#" class="btn btn-green  p-3 btna ">SERVICE WE OFFER</a></li>
                    <li><a href="#" class="btn btn-green  p-3 btna ">LIST OF APPROVALS</a></li>
                </ul> --}}
                <div class="text-about">
                    <h2 class="text-center text-green textinfo-h1 h1-info">Refracast Metallurgicals Pvt.Ltd.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LIST OF APPROVALS info -->
<section class="container textinfo ">
    <p class="h1  text-green textinfo-h1">LIST OF APPROVALS</p>
    <!-- <p class="h1 text-center text-opacity mt-2">The Visionary Drive of Mr. Arnab Roy</p> -->
     <ul>
        <li class="h4  textjustify textinfo-h1-p">HAZARDOUS WASTE AUTHORIZATION FOR PURCHASE, TRANSPORTAND RECYCLING.</li>
        <li class="h4  textjustify textinfo-h1-p">AIR AND WATER CONSENTTO OPERATE RECYCLING AND FERRO ALLOY UNIT</li>
        <li class="h4  textjustify textinfo-h1-p">APPROVAL OF IMPORT FROM DIRECTORATE GENERAL OF FOREIGN TRADE, <br>
            GOVERNMENTOF INDIA</li>
        <li class="h4  textjustify textinfo-h1-p">PERMISSION TO IMPORT SPENT CATALYST FROM MINISTRY OF ENVIRONMENT AND <br>
            CLIMATE CHANGE, GOVERNMENTOF INDIA.</li>
     </ul>
    
</section>
<div style="margin: 18% 0 12% 0;">
    <hr>
</div>
<!-- LIST OF APPROVALS info -->


    
@endsection