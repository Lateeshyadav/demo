@extends('layouts.master')
@section('title','Product')
@section('content')
{{-- <section id="pageTitle" class="page-title page-title-layout2 bg-overlay- bg-parallax">
    {{-- <div class="bg-img"><img src="assets/images/page-titles/15.jpg" alt="background"></div> 
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
        
         
          <h1 class="pagetitle__heading">Products</h1>
        </div>
      </div>
    </div>
  </section> --}}
 
  {{-- <h2 class="darkgreen">Products</h2> --}}
<section id="textContentSection" class="text-content-section">
  
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 hidden-xs hidden-sm d-lg-block d-none">
          <h2 class="darkgreen">Products</h2>
<div class="widget widget-categories p-0">
                    
  <div class="widget-content">

    <ul class="list-unstyled widget-ul">
                <li class="widget-li">
        <a href="{{url('/zslagcan')}}"class="text-decoration-none widget-a"><span>Z-Slag Can  </span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/zslagcaal50')}}"class="text-decoration-none widget-a"><span>Z-Slag CA-AL50</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/zslagcaal20')}}"class="text-decoration-none widget-a"><span>Z-Slag CA-AL20</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/slagkills')}}"class="text-decoration-none widget-a"><span>SLAG KILL 100</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/ferronickel')}}"class="text-decoration-none widget-a"><span>FERRO NICKEL</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/ferronickelmoly')}}"class="text-decoration-none widget-a"><span>FERRO NICKEL MOLY</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/calciummolybdatecm')}}"class="text-decoration-none widget-a"><span>CALCIUM MOLYBDATE (CM)</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="/ferrovanadium"class="text-decoration-none widget-a"><span>FERRO VANADIUM</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/nickleoxidecobaltoxide')}}"class="text-decoration-none widget-a"><span>NICKLE OXIDE & COBALT OXIDE</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>
                <li class="widget-li">
        <a href="{{url('/tungstenvanaduimpent')}}" class="text-decoration-none widget-a"><span>TUNGSTEN OXIDE & VANADIUM PENTOXIDE</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
      </li>

     
    </ul>
    <a href="{{asset('broucher/BROCHURE.pdf')}}" download="BROCHURE.pdf" class=" text-decoration-none btn green  btnbroucher w-100 py-3 "><i class="fa-solid fa-download m-1"></i>Download Brochure</a>

  </div>
</div>

</aside>
                       
        </div>
        
        <div class="col-sm-12 col-md-12 col-lg-9">
          <div class="text__block">            
            
            @section('product')
            {{-- <a href="{{asset('refmet/uploads/upload_images/1706006782T_BROCHURE-01.jpg')}}" download="1706006782T_BROCHURE-01.jpg" class=" text-decoration-none btn btn-outline-success"><i class="fa-solid fa-download m-1"></i>Brochure</a> --}}
<div class="container-fluid p-0  text-white text-center product-top">
    <div class="row">
        <div class="col-md-4 col-12">
            <img src="{{asset('refmet/demo4/assets/images/case-studies/Z-Slag-Can.jpg')}}" alt="" class="img">
        </div>
        <div class="col-md-8 col-12"> 
          <div class="productname">
            <h1 class="darkgreen">Z-SLAG-CAN</h1>
            <h3 class="yellow">PRODUCT DATA SHEEET</h3></div>  
            
           </div>
    </div>

  </div>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="darkgreen">Description</h3>
        <p class="textjustify">Steel making market in India is highly competitive and being cost effective in manufacturing along with good quality steel is the essence for sustainability and growth. Refracast Metallurgicals Pvt.ltd. is happy to introduce Z-Slag CAN a product designed to improve inclusion removal capacity of LRF slag. By adding the given active C12A7 sulphur and Phos can be controlled to a great extent. The entire LRF slag will get fluidized and the entire slag viscosity will reduce. Making it very easy to handle the slag. No further re- oxidation of liquid steel will occure as the slag will form a tight seal between steel and atmosphere. Will help improve ladle life by avoiding CaF2. And will help bring down the total slag volume. Making it energy efficient.
          As seen in Rankin diagram, all three varieties of synthetic slag targets to make the slag in the C12 A7 phase region.
          The Rankin diagram
          SLAD
          CAD
          KITC
          ALD,
          This is a win-win product where cost saving is far more than the cost of addition. It also help preventing in reversal of metal oxides from slag to steel at the same time prevents</p>
        <img src="{{asset('refmet/demo4/uploads/upload_images_crop/1706006782T_BROCHURE-01.jpg')}}" alt="" class="img">
        <p>inclusion to float around in the liquid steel.</p>

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
        <p>(With the rising Titanium restriction in finished Steel, this slag conditioner is ideal) Packaging: 1MT jumbo bag / 20kg HDPE bags in Pallet</p>
        
      </div>
      <div class="col-sm-6">
        <h3 class="darkgreen">APPLICATION : (How to use) </h3>  
        <ul>
          <li class="textjustify">Once the Liquid Steel is ready for tapping and empty ladle is placed add 3kg of Z-Slag CAN per ton of liquid steel in the empty ladle or during the tapping.</li>
          <li class="textjustify">Take the ladle to LRF for refining process. During which lime and other flux are added as per old SOP.</li>
          <li class="textjustify">During final stages if the MnO or FeO content of slag is high add 2kg to 8kg of Z-Slag CAN this will help improve Metal Oxide reduction back to Metal. Make sure after the 2nd addition there is sufficient turbulence in the ladle for proper slag and metal reaction at the interface.</li>
        </ul>      
        
        <h3 class="darkgreen">BENEFITES OF Z-Slag CAN : </h3>    
        <ul>
          <li class="textjustify">Quick Melting Slag cover reduces re-oxidation</li>
          <li class="textjustify">Narrow range of impurities and inclusion level.</li>
          <li class="textjustify">Quick desulphurization right from the tapping of molten steel.</li>
          <li class="textjustify">Saves Al- Metal consumption.</li>
          <li class="textjustify">Reduction of refining time.</li>
          <li class="textjustify">Improves refectory lining Life.</li>
          <li class="textjustify">Avoids use of CaF2</li>
          <li class="textjustify">Reduces Calcium treatment.</li>
          <li class="textjustify">Reduces Power consumption.</li>
          <li class="textjustify">Most importantly Consistent quality of steel.</li>
          <li class="textjustify">Cost saving is more than the cost of addition.</li>
        </ul>   

          
        <h3 class="darkgreen ">FEW OF THE MOST CONMMAN SMS SHOETCOMINGS WE ADDRESS:</h3>
        <ul>
          <li class="textjustify"> Fuming in work space.</li>    
          <li class="textjustify"> Crusting of slag in the ladle.</li>    
          <li class="textjustify"> Oxidation of liquid steel due to reaction with atmospheric Oxygen.</li>    
          <li class="textjustify"> Heat loss from slag zone</li>    
          <li class="textjustify"> Avoid use of CaF2</li>    
          <li class="textjustify"> Improve Ladle life</li>    
          <li class="textjustify"> Reduction in time needed for Sulphur and non-metallic inclusion removal.</li>    
          <li class="textjustify"> We help control Titanium in steel,</li>           
        </ul>
   
                     
      </div>      
    </div>
  </div>
            @show   
            
                          
            

           
          
                              
          
            <h5 class="text__block-title"></h5>      
            <!--<div class="text__block-desc"><?php //echo $row['fldDetails']; ?></div> -->       
             <img src="uploads/products/" class="img-responsive" alt="" title="">
          
            
              
               
               
        </div>
      </div>
      
      <div class="col-sm-12 col-md-12 col-lg-3 hidden-lg hidden-md d-lg-none d-block">
      <br>
                <!--<h4>Products</h4>-->
                <div class="widget widget-categories p-0">
                    
                  <div class="widget-content">
                
                    <ul class="list-unstyled widget-ul">
                                <li class="widget-li">
                        <a href="{{url('/zslagcan')}}"class="text-decoration-none widget-a"><span>Z-Slag Can  </span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/zslagcaal50')}}"class="text-decoration-none widget-a"><span>Z-Slag CA-AL50</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/zslagcaal20')}}"class="text-decoration-none widget-a"><span>Z-Slag CA-AL20</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/slagkills')}}"class="text-decoration-none widget-a"><span>SLAG KILL 100</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/ferronickel')}}"class="text-decoration-none widget-a"><span>FERRO NICKEL</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/ferronickelmoly')}}"class="text-decoration-none widget-a"><span>FERRO NICKEL MOLY</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/calciummolybdatecm')}}"class="text-decoration-none widget-a"><span>CALCIUM MOLYBDATE (CM)</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="/ferrovanadium"class="text-decoration-none widget-a"><span>FERRO VANADIUM</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/nickleoxidecobaltoxide')}}"class="text-decoration-none widget-a"><span>NICKLE OXIDE & COBALT OXIDE</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                                <li class="widget-li">
                        <a href="{{url('/tungstenvanaduimpent')}}" class="text-decoration-none widget-a"><span>TUNGSTEN OXIDE & VANADIUM PENTOXIDE</span><i class="fa-solid fa-arrow-right widget-i"></i></a>
                      </li>
                
                     
                    </ul>
                    <a href="{{asset('broucher/BROCHURE.pdf')}}" download="BROCHURE.pdf" class=" text-decoration-none btn green btnbroucher w-100 py-3"><i class="fa-solid fa-download m-1"></i>Download Brochure</a>

                  </div>
                </div>
                
                </aside>
                                       
                        </div>
                

         
        </div>
    </div>
    </div>
  </section>


 
</div>
<script>
  // Add click event listener to all links
// document.querySelectorAll('.widget-a').forEach(link => {
//   link.addEventListener('click', function (e) {
//     e.preventDefault();

//     // Remove 'active' class from all links
//     document.querySelectorAll('.widget-a').forEach(item => {
//       item.classList.remove('active');
//     });

//     // Add 'active' class to the clicked link
//     this.classList.add('active');
//   });
// });

</script>



    
@endsection