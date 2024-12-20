{{-- @extends('layouts.master') --}}
@extends('product')
@section('title','Farro Vanadium')

@section('product')
{{-- <a href="{{asset('refmet/uploads/upload_images/1706096887T_BROCHURE-02.jpg')}}" download="1706096887T_BROCHURE-02.jpg" class=" text-decoration-none btn btn-outline-success"><i class="fa-solid fa-download m-1"></i>Brochure</a> --}}
<div class="container-fluid p-5  text-white text-center product-top">
    <div class="row">
        <div class="col-md-4 col-12">
            <img src="{{asset('product_img/FERRO-VANADIUM.jpg')}}" alt="" class="img">
        </div>
        <div class="col-md-8 col-12"> 
          <div class="productname">
            <h1 class="darkgreen fontf">FERRO VANADIUM</h1>
            <h3 class="yellow fontf">PRODUCT DATA SHEEET</h3> </div>  
             
          </div>
    </div>

  </div>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="darkgreen fontf">Commercial Benefit</h3>
        <p class="textjustify p">Ferro vanadium is an alloy composed primarily of iron and vanadium. It is commonly used as an additive in the production of steel to enhance its strength, hardness, and corrosion resistance. The addition of ferro vanadium to steel can improve its structural integrity, making it suitable for applications where high strength and durability are required.</p>
        <p class="textjustify p">Ferro vanadium is also utilized in the manufacturing of various steel products, including structural steel, tool steel, and stainless steel. It helps to refine the grain structure of steel, increase its tensile strength, and improve its resistance to wear, fatigue, and heat.</p>
        <p class="textjustify p">In addition to its use in the steel industry, ferro vanadium finds applications in other sectors as well. It is employed in the production of certain superalloys, which are used in aerospace, defense, and high-temperature applications. These alloys. possess exceptional strength, heat resistance, and corrosion resistance, making them suitable for extreme operating conditions.</p>
        
        
        
      </div>
      <div class="col-sm-6">
        <h4 class="darkgreen fontf">Specification: </h4>  
        <table class="table table-bordered">
          
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
              {{-- <td class=""></td> --}}
              <td colspan="3" class="text-center bg-success">FERRO VANADIUM V-50%</td>
              {{-- <td class=""></td> --}}
            </tr>
            <tr>
              {{-- <td></td> --}}
              <td colspan="3" class="text-center bg-success">CHEMCIAL COMPOSITION</td>
              {{-- <td></td> --}}
            </tr>
            <tr>              
              <td>P</td>
              {{-- <td>:</td> --}}
              <td class="textright">0.05% Max</td>              
            </tr>
            <tr>              
              <td>S</td>
              {{-- <td>:</td> --}}
              <td class="textright">0.05% Max</td>              
            </tr>
            <tr>              
              <td>AL</td>
              {{-- <td>:</td> --}}
              <td class="textright">1.5% Max</td>
            </tr>
            <tr>              
              <td>Si</td>
              {{-- <td>:</td> --}}
              <td class="textright">1.5% Max</td>
            </tr>
            <tr>              
              <td>C</td>
              {{-- <td>:</td> --}}
              <td class="textright">0.2% Max</td>
            </tr>                        
          </tbody>
        </table>
        <table class="table table-bordered">
          
          <thead>
            
          </thead>
          <tbody>
            <tr>
              {{-- <td class=""></td> --}}
              <td colspan="3" class="text-center bg-success">FERRO VANADIUM V-78%</td>
              {{-- <td class=""></td> --}}
            </tr>
            <tr>
              {{-- <td></td> --}}
              <td colspan="2" class="text-center bg-success">CHEMCIAL COMPOSITION</td>
              {{-- <td></td> --}}
            </tr>
            <tr>              
              <td>P</td>
              {{-- <td>:</td> --}}
              <td class="textright">0.05% Max</td>              
            </tr>
            <tr>              
              <td>S</td>
              {{-- <td>:</td> --}}
              <td class="textright">0.05% Max</td>              
            </tr>
            <tr>              
              <td>AL</td>
              {{-- <td>:</td> --}}
              <td class="textright">1.5% Max</td>
            </tr>
            <tr>              
              <td>Si</td>
              {{-- <td>:</td> --}}
              <td class="textright">1.5% Max</td>
            </tr>
                                   
          </tbody>
        </table>      
        
        <h4 class="darkgreen fontf">Application Area:</h4>  
        <ul>
          <li> Steel Production</li>    
          <li> Structural Steel</li>    
          <li> Tool Steel</li>
          <li> Superalloys</li>
          <li> Automotive Industry</li>
        </ul>         

                  
      </div>      
    </div>
  </div>
    
@endsection