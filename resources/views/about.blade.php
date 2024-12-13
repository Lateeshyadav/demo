@extends('layouts.main_master')
@section('title','About')
@section('content')
<!-- Main Content Section -->
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 green position-relative main-box" style="">
            <div class="box mt-5 position-absolute translate-middle" style="">
                {{-- <div class="about-img"></div> --}}
                <img src="{{asset('image/about-us.png')}}" alt="" class="img-fluid imgsize">
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
<!-- about info -->
<section class="container textinfo ">
    <p class="h1  text-green textinfo-h1">ABOUT US</p>
    <!-- <p class="h1 text-center text-opacity mt-2">The Visionary Drive of Mr. Arnab Roy</p> -->
    <p class="h4  textjustify textinfo-h1-p mb-4">At Refracast Metallurgicals Pvt Ltd (RMPL), we pride ourselves on being pioneers in the field of spent 
        catalyst recycling, with over two decades of experience rooted in innovation and sustainability. Based in Raipur, Chhattisgarh—the heart of India—our journey began in 1995, and since then, we have 
        consistently pushed the boundaries of what’s possible in the metallurgical industry.
    </p>
    <p class="h4 textjustify textinfo-h1-p mb-4">RMPL has carved a niche as a leader, specializing in recycling complex spent catalysts and developing cutting-edge solutions for the steel-making sector. Our dedication to research and development has allowed us to handle the most intricate catalysts, positioning us at the forefront of sustainable recycling practices. Our unique zero-waste technologies have set new industry standards, reinforcing our commitment to environmental stewardship.
    </p>
    <p class="h4 textjustify textinfo-h1-p mb-4">Our extensive expertise spans across multiple metallurgical processes, and we are particularly proud of our innovations that have transformed the Indian steel-making industry. Through the creation of 
        specialty products tailored to meet industry demands, we have significantly improved the efficiency and 
        quality of steel production across the nation. As a research-driven company, we continuously invest in 
        developing advanced materials and processes that promote sustainability and performance.
    </p>
    <p class="h4 textjustify textinfo-h1-p mb-4">With a history marked by groundbreaking achievements and a forward-thinking approach, RMPL is 
        more than a company—we are a catalyst for change in the metallurgical landscape. Join us in our 
        mission, where tradition meets innovation, and every challenge presents an opportunity for growth.
    </p>
</section>
<div class="my-5">
    <hr class="">
</div>
 
<!-- about info -->

    
@endsection
    

       <!-- footer start -->
     {{-- @extends('layouts.footer') --}}