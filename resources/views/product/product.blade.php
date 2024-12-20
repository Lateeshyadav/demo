@extends('layouts.master')
@section('title','Product')
@section('dummy')
<div class="container-fluid p-5  text-white text-center product-top">
    <div class="row"> 
        <div class="col-md-4 col-12">
            <img src="{{asset('product_img/Z-Slag-Can.jpg')}}" alt="" class="img">
        </div>
        <div class="col-md-8 col-12"> 
          <div class="productname">
            <h1 class="darkgreen">Z-SLAG-CAN</h1>
            <h3 class="yellow">PRODUCT DATA SHEEET</h3>  
          </div>  

           </div>
    </div>

  </div>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="darkgreen ">Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> 
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>

        <table class="table border table-hover">
          <h4 class="darkgreen">PRODUCT</h4>
          <h5 class="darkgreen">Z-Slag Can</h5>
          <thead>
            {{-- <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr> --}}
          </thead>
          <tbody>
            <tr>
              {{-- <th scope="row">1</th> --}}
              <td>C12A7</td>
              <td>:</td>
              <td>100%</td>              
            </tr>
            <tr>              
              <td>CaO</td>
              <td>:</td>
              <td>42 to 46%</td>
              
            </tr>
            <tr>              
              <td>Al2O3</td>
              <td>:</td>
              <td>38 to 42%</td>
            </tr>
            <tr>              
              <td>SiO2</td>
              <td>:</td>
              <td>6 - 10%</td>
            </tr>
            <tr>              
              <td>FE2O3 + FEO</td>
              <td>:</td>
              <td>2 - 3%</td>
            </tr>
            <tr>              
              <td>TiO2</td>
              <td>:</td>
              <td>0.5% MAX</td>
            </tr>
            <tr>              
              <td>Size</td>
              <td>:</td>
              <td>10-15mm lumps</td>
            </tr>            
          </tbody>
        </table>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, sed.</p>
        
      </div>
      <div class="col-sm-6">
        <h3>APPLICATION : (How to use) </h3>        
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p> 
        <h3>BENEFITES OF Z-Slag CAN : </h3>           
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>
        <h3>FEW OF THE MOST CONMMAN SMS SHOETCOMINGS WE ADDRESS :</h3>
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
        <p><i class="fa-regular fa-star"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, possimus?</p>    
                     
      </div>      
    </div>
  </div>
    
@endsection