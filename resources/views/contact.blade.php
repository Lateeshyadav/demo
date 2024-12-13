@extends('layouts.main_master')
@section('title','Contact Us')

@section('content')
<style>
  @media(max-width:768px){
   .card-body{
     min-width: 360px;
   }
   .contact-icons{
     font-size: 31px;
     padding: 6px;
   }
  } 
  @media(max-width:576px){
   .h1-textinfo{
     margin-top: -13%;
     margin-left: -49px
   }
   .textinfo{
     margin-top: 35%
   }
   .textinfo-h1{
     font-size: 1.5rem;

   }
   .text-opacity{
     font-size: 16px
   }
   .colmt{
     margin: 30px 0 0px 0;
   }
   .get-h1{
     font-size: 30px;
   }
   .text-underline{
     position:inherit;
   }
   .text-underline::before{
     background-color: white;
   }
   .nav-margin-left{
     margin-left:0% ;
     /* align-items: center; */
     text-align: justify
     
     
   }
     
   
  }     
 
</style>
<!-- Main Content Section -->
<section class="container-fluid">
  <div class="row">
      <div class="col-md-12 green position-relative main-box" style="">
          <div class="box mt-5 position-absolute translate-middle" style="">
              <img src="{{asset('image/home.png')}}" alt="" class="img-fluid imgsize">
              {{-- <ul class="list-unstyled d-flex justify-content-center btnul position-absolute">
                  <li><a href="#" class="btn btn-green  p-3 px-5 btna btnax">WHAT WE BUY</a></li>
                  <li><a href="#" class="btn btn-green  p-3 px-5  btna btnax">WHAT WE SELL</a></li>
                  <li><a href="#" class="btn btn-green  p-3 btna ">SERVICE WE OFFER</a></li>
                  <li><a href="#" class="btn btn-green  p-3 btna ">LIST OF APPROVALS</a></li>
              </ul> --}}
              <div class="text-about">
                <h2 class="text-center text-green textinfo-h1 h1-textinfo">Refracast Metallurgicals Pvt.Ltd.</h2>
            </div>
          </div>
      </div>
  </div>
</section>
<!-- contactus info -->
<section class="container textinfo ">
  <p class="h1  text-green  get-h1">Get In Tuch</p>
   <p class="h5  text-opacity mt-2">Send us your queries and we will try to answer them as soon as possible.</p>
  
   <div class="row">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-2">
                {{-- <img src="" alt=""> --}}
                <a href="" class="contact-icons"><i class="fa-solid fa-map-location-dot"></i></a>
              </div>
              <div class="col-10">
                <h5>Corporate Office Address : </h5>
                 <p>Crown Building Ashoka Park,Opposite Khamardih Police Station, Near Devkripa Hospital Shankar Nagar Raipur (CG)-492001</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 colmt">
      <div class="card shadow">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-2">
                {{-- <img src="" alt=""> --}}
                <a href="" class="contact-icons loc"><i class="fa-solid fa-location-dot"></i></a>
              </div>
              <div class="col-10">
                <h5>Factory Address : </h5>
                 <p>Refracast Metallurgicals Private Limited, 22-Industrial Area, Bhanpuri, P.O. Birgaon, Raipur (CG)-493221</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   <div class="row my-5">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-2">
                {{-- <img src="" alt=""> --}}
                <a href="" class="contact-icons"><i class="fa-solid fa-envelope"></i></a>
              </div>
              <div class="col-10">
                <h5>E-Mail :</h5>
                 <p>kunal@refmet.org</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 colmt">
      <div class="card shadow">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-2">
                {{-- <img src="" alt=""> --}}
                <a href="" class="contact-icons"><i class="fa-solid fa-phone"></i></a>
              </div>
              <div class="col-10">
                <h5>For sales & Marketing :</h5>
                 <p>+91 98935 94094</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</section>
<div class="my-5">
  <hr class="">
</div>

<!-- contactus info -->

  
@endsection