{{-- @extends('layouts.master') --}}
@extends('product')
@section('title','Calcium Molybdate CM')

@section('product')
{{-- <a href="{{asset('refmet/uploads/upload_images/1706096876T_BROCHURE-02.jpg')}}" download="1706096876T_BROCHURE-02.jpg" class=" text-decoration-none btn btn-outline-success"><i class="fa-solid fa-download m-1"></i>Brochure</a> --}}
<div class="container-fluid p-5  text-white text-center product-top">
    <div class="row">
        <div class="col-md-4 col-12">
            <img src="{{asset('product_img/CALCIUM-MOLY-BDATE.jpg')}}" alt="" class="img">
        </div>
        <div class="col-md-8 col-12">
          <div class="productname">
            <h1 class="darkgreen fontf">CALCIUM MOLYBDATE (CM)</h1>
            <h3 class="yellow fontf">PRODUCT DATA SHEEET</h3> </div>  
          </div>   

    </div>

  </div>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="darkgreen fontf ">WHAT IS CALCIUM MOLYBDATE (CM)?</h4>
        <p class="textjustify p ">This is a new cost saving alternate to the traditional ferro moly or Moly Oxide. As each material has its strength and weakness so does Calcium Moly.</p>
        <H4 class="darkgreen fontf">CALCIUM MOLYBDATE SPACIFICATION</H4>
        <table class="table border table-hover">
          <thead>                      
          </thead>
          <tbody>
              {{-- <tr>
                  <td class="text-light bg-success">Ferro Nickel :</td>
              </tr> --}}
              <tr>
                  <td>Mo</td>
                  <td>:</td>
                  <td>40-45%</td>
              </tr>
              <tr>
                  <td>CaO</td>
                  <td>:</td>
                  <td>0.05% Max</td>
              </tr>
              <tr>
                <td>Free Sulphur is trace, around 0.35% as CaS04.</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                  <td>p </td>
                  <td>:</td>
                  <td>0.04% Max</td>
              </tr>
              <tr>
                <td>SiO<sub>2</sub></td>
                <td>:</td>
                <td>0.5 to 1% Max</td>
              </tr>
              <tr>
                  <td>V</td>
                  <td>:</td>
                  <td> 0 to  0.4% Max</td>
              </tr>
              <tr>
                  <td>Fe</td>
                  <td>:</td>
                  <td>0.5-0.7% Max</td>
              </tr>
              <tr>
                <td>Sn, Sb, Mn, Cu, As: Nil</td>
                <td></td>
                <td></td>
              </tr>
          </tbody>          
      </table>
        
        <h4 class="darkgreen fontf">FERRO MOLY VS CALCIUM MOLY</h4>
        <ul>
          <li class="textjustify p"> No dilution effect of Molybdenum. Unlike Ferro Moly which has around 35% iron contain and rest in Molybdenum. Calcium Moly has only Molybdenum and Calcium which goes to slag so gives a better Moly control.</li>
          <li class="textjustify p"> The Calcium that separate from Calcium Moly and combines with Oxygen is highly reactive to remove sulphur.</li> 
          <li class="textjustify p"> In addition, Calcium Moly takes up less heat from system per kg Molybdenum than its counterpart ferro Moly.</li> 
          <li class="textjustify p"> With ferro Moly there are possibility of mix-up by traders whereas in Calcium Moly it is not possible.</li> 
          <li class="textjustify p"> Calcium Moly has lower chances of it been stolen as there is no direct market for it.</li> 
  
        </ul>

        <h4 class="darkgreen fontf">COMMERCIAL BENEFIT</h4>
        <p class="textjustify p">Calcium Molybdate is always priced a bit lower than ferro Moly. But that's not the only cost benefit. Just like Ferro Moly Calcium Moly does give 100% recovery. Takes less heat, does not dilute the steel, helps remove sulphur. Unlike ferro moly being denser than steel calcium moly does not have a tendency to settle to the bottom. Does require less time and agitation to form a homogeneous mixture.</p>
        
      </div>
      <div class="col-sm-6">
        <h4 class="darkgreen fontf">LONG TERM AVAILABILITY</h4>
        <p class="textjustify p">We ensure you there is no dearth of raw material source. We have been making this for over 2 decades.</p>
        <h4 class="darkgreen fontf">HOW AND WHEN TO ADD CM </h4>
        <h4 class="darkgreen fontf">LRF / LADLE ADDITION FOR ALLOY STEEL TO REPLACE FERRO MOLY:</h4>
        <p class="textjustify p" >CALCIUM MOLYBDATE (CM) is to be added in ladle during tapping from Induction or Arc furnace to replace Ferro Moly to save cost. Quantity of addition should be targeting 90-95% of the target chemistry. The balance trimming addition needs to be done by Ferro Moly only during processing.
          PRECAUTION: CM should not be added in LRF during processing after formation of slag as in case of crusty slag, CM pallets may get caught in slag and may not reach steel to give less / erratic recovery of Moly.
          However, it the steel is taken to VD after LRF treatment, then trimming addition may be done in VD to get full recovery of Moly.</p>
          <h4 class="darkgreen fontf">EAF ADDITION TO REPLACE MOLY OXIDE:</h4>
          <p class="textjustify p">CALCIUM MOLYBDATE can also be added in Arc furnace to replace Moly oxide. Recovery of Moly from CM (97-100%) is much better than Moly oxide (92-96%) as Moly doesn't sublime from Calcium Moly (being attached to Calcium) which happens in case of Moly oxide during addition.</p>
        <h4 class="darkgreen fontf">ANY LIMITATION OF USING CM </h4>  
        <p class="textjustify p">Only precaution is Calcium Moly cannot be added as trimming addition towards the finishing addition. We have to use ferro moly. Calcium Moly has another limitation for use in induction furnace that it requires neutral or basic lining.</p>         
        
        <h4 class="darkgreen fontf">PRECAUTION OF USING CM</h4>
        <p class="textjustify p">We advise users to limit Calcium Moly addition in the LRF under 500kg per heat. If by calculation more is needed the same can be added in EAF. As there can be a possibility ofuneven result because of coagulationto bigger pieces due to slag coating by tapping metal from EAF in ladle. There is no limit to Calcium Moly addition in EAF, nor is there any loss of moly recovery in EAF.</p>
            
                     
      </div>      
    </div>
  </div>
    
@endsection