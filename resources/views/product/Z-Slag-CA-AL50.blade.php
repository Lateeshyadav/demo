{{-- @extends('layouts.master') --}}
@extends('product')
@section('title','Z-SLAG-CA-AL50')

@section('product')
{{-- <a href="{{asset('refmet/uploads/upload_images/1706096822T_BROCHURE-02.jpg')}}" download="1706096822T_BROCHURE-02.jpg" class=" text-decoration-none btn btn-outline-success"><i class="fa-solid fa-download m-1"></i>Brochure</a> --}}
<div class="container-fluid p-5  text-white text-center product-top">
    <div class="row">
        <div class="col-md-4 col-12">
            <img src="{{asset('refmet/demo4/assets/images/case-studies/Z-SlagCA-AL50.jpg')}}" alt="" class="img">
        </div>
        <div class="col-md-8 col-12">   
             <h1 class="darkgreen">Z-SLAG CA-AL50</h1>
            <h3 class="yellow">PRODUCT DATA SHEEET</h3> </div>
    </div>

  </div>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="darkgreen">Description</h3>
        <p class="textjustify">Steel making market in India is highly competitive and being cost effective in manufacturing along with good quality steel is the essence for sustainability and growth. Refracast Metallurgicals Pvt.ltd. is happy to introduce Z-Slag CA-AL50 a product designed to reduce Manganese consumption by improving Manganese recovery up to 70% or more. Z-Slag CA~AL50 reduces the final Fe(m) and FeO content in the LRF furnace slag. This is done by killing the slag of excess oxygen and reducing the slag viscosity. Our product also helps reduce non-metallic inclusions to give better surface finish of rolled product. Along with Sulphur removal.
          This is a win-win product where cost saving is far more than the cost of addition. Synthetic slag has always been a product to be used by Primary steel makers with basic or neutral lining to reduce Sulphur and inclusion levels. We have added De-Oxidation capability to our product. Synthetic slag consists of prepared mixture of several individual compounds which is used during secondary steelmaking to assist the steel treatment in the furnace and ladle from the viewpoint of effective refinement. As we are aware of the complexity of number of items needed for effective steel treatment. That's why we offer this pre mix material for simplicity.</p>
        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> 
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> --}}

        <table class="table border table-hover">
          <h4 class="darkgreen">PRODUCT</h4>
          <h5 class="darkgreen">Z-Slag CA-AL50</h5>
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
              <td>C<sub>12</sub>A<sub>7</sub></td>
              <td>:</td>
              <td>50%</td>              
            </tr>
            <tr>
              <td>AL METAL</td>
              <td>:</td>
              <td>6-8%</td>
            </tr>
            <tr>              
              <td>Al<sub>2</sub>O<sub>3</sub>(Total)</td>
              <td>:</td>
              <td>55%</td>
            </tr>
            <tr>              
              <td>CaO(Max)</td>
              <td>:</td>
              <td>30%</td>
              
            </tr>
            
            <tr>              
              <td>SiO<sub>2</sub></td>
              <td>:</td>
              <td>9%</td>
            </tr>
            <tr>              
              <td>FE<sub>2</sub>O<sub>3</sub> + FEO</td>
              <td>:</td>
              <td>3%</td>
            </tr>
            <tr> 
              <tr>
                <td>MgO(Max)</td>
                <td>:</td>
                <td>4%</td>
              </tr>             
              <td>TiO<sub>2</sub></td>
              <td>:</td>
              <td>0.8% MAX</td>
            </tr>
            <tr>              
              <td>Size</td>
              <td>:</td>
              <td>2-40mm</td>
            </tr> 
            <tr>
            <td>Melting Temo.</td>  
            <td>:</td>  
            <td>1380<sup>o</sup>C</td>  
            </tr> 
            
          </tbody>
        </table>
        <p class="text-dark"><span>Packaging :</span>1MT jumbo bag / 20kg
          HDPE bags in Pallet</p>
        
      </div>
      <div class="col-sm-6">
        <h3 class="darkgreen">ADDITOIN OF Z-Slag CA-AL50 :</h3>
        <h5 class="darkgreen">APPLICATION : (How to use) </h5> 
        <ul>
          <li class="textjustify"> Once the liquid steel metal is ready for tapping and empty ladle is placed add 2 to 5kg of Z-Slag CA-AL50 per ton of liquid steel in the empty ladle.</li>    
          <li class="textjustify"> Take the ladle to LRF for refining process. During which lime and other flux are added as per old SOP.</li>    
          <li class="textjustify"> Depending on the FeO, MnO and other alloying element oxides in slag we can add 2kg to 8kg of Z-Slag CA~AL50. This will help reduce all metal oxides to metal. Make sure after the 2nd addition there is sufficient turbulence in the ladle for proper slag and metal reaction at the interface.</li> 
            
        </ul>       
        
        <h3 class="darkgreen">BENEFITES OF Z-Slag CA-AL50 : </h3> 
        <ul>
          <li class="textjustify"> Avoid use of Aluminum Metal.</li>    
          <li class="textjustify">  Improves Mn recovery to 70% or more.as per c% in steel.</li>    
          <li class="textjustify"> Reduces Fe(m) and FeO in final discarded furnace Slag</li>
          <li class="textjustify"> Reduce heat loss in ladle.</li>
          <li class="textjustify"> Faster inclusion removal and clean liquid steel.</li>
          <li class="textjustify"> Helps prevent refectory lining Life as the basicity of slag is improved.</li>
          <li class="textjustify"> Consistent chemistry of the steelmaking slag.</li>
          <li class="textjustify"> Gives better recovery of rolled products and surface finish and </li>
          <li class="textjustify"> Reduce miss rolls.</li>
          <li class="textjustify"> An effective fluid sink that absorbs inclusions from steel.</li>
          <li class="textjustify"> Fast and better recovery of steel as well as alloys.</li>
          <li class="textjustify"> Z-Slag CA~AL50 works as the catalyst to prevent inclusion, Phosphorus and Sulphur reversal from slag to steel.</li>
          <li class="textjustify"> Cost saving is more than the cost of addition.</li>  
        </ul>          

                     
      </div>      
    </div>
  </div>
    
@endsection