{{-- @extends('layouts.master') --}}
@extends('product')
@section('title', 'Ferro Nickel')

@section('product')
    {{-- <a href="{{ asset('refmet/uploads/upload_images/1706096853T_BROCHURE-02.jpg') }}" download="1706096853T_BROCHURE-02.jpg" --}}
        {{-- class=" text-decoration-none btn btn-outline-success"><i class="fa-solid fa-download m-1"></i>Brochure</a> --}}
    <div class="container-fluid p-5  text-white text-center product-top">
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="{{ asset('product_img/FERRO-NICKEL.jpg') }}" alt="" class="img">
            </div>
            <div class="col-md-8 col-12">
                <div class="productname">
                    <h1  class="darkgreen fontf">FERRO NICKEL</h1>
                <h3 class="darkgreen fontf">(60% to 75%, grade)</h3>
                <h3 class="yellow fontf">PRODUCT DATA SHEEET</h3>
                </div>
                
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="darkgreen fontf">WHAT IS FERRO NICKEL</h5>
                <h5 class="darkgreen fontf">(60% TO 75%,GRADE)?</h5> 

                <table class="table border table-hover">
                    <thead>                      
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-light bg-success">Ferro Nickel :</td>
                        </tr>
                        <tr>
                            <td>Ni 55-75%Ni</td>
                        </tr>
                        <tr>
                            <td>C 1.50% Max</td>
                        </tr>
                        <tr>
                            <td>S 0.05% Max</td>
                        </tr>
                        <tr>
                            <td>Co 0.10% Max</td>
                        </tr>
                        <tr>
                            <td>P 0.05% Max, Balance Fe</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="text-light bg-success">Size :</td>
                        </tr>
                        <tr>
                            <td>1-4 Kg per Piece.</td>
                        </tr>
                        <tr>
                            <td>4-10 Kgs per Piece</td>
                        </tr>
                        <tr>
                            <td>Pkg-In 1 mt Jumbo bags.</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="darkgreen fontf">commercial benefit</h4>
                <p class="textjustify p">Ferro Nickel is always priced one dollar per Kg lower than Pure Nickel. Also we provide 30 to 40% Iron
                    that is free too. But that's not the only cost benefit, there is no import duty. Ferro Nickel is
                    available in India unlike pure nickel which need to be imported. And if bought from a trader they will
                    also keep their cut. Ferro Nickel will be directly supplied by Us.</p>

                {{-- <h4>Ferro Nickel Vs Pure Nickel</h4>
                <p>Unlike pure nickel plate Ferro Nickel is a very safe product to store in shop floor. No added care needs
                    to be taken. Ferro Nickel gives greater control of Nickel addition as the material is provided in great
                    variation from 1kg to 4kg.
                    In Ferro Nickel some dilution can be observed but then
                    that comes with cost benefit plant gets 25 to 35% fe free of cost.</p> --}}

            </div>
        
        <div class="col-sm-6">
            <h4 class="darkgreen fontf">Ferro Nickel Vs Pure Nickel</h4>
            <p class="textjustify p">Unlike pure nickel plate Ferro Nickel is a very safe product to store in shop floor. No added care needs
                to be taken. Ferro Nickel gives greater control of Nickel addition as the material is provided in great
                variation from 1kg to 4kg.
                In Ferro Nickel some dilution can be observed but then
                that comes with cost benefit plant gets 25 to 35% fe free of cost.</p>

            <h4 class="darkgreen fontf">Long term availibility </h4>
            <p class="mt-3 textjustify p">We ensure you there is no dearth of raw material
                source. We have been making this for over 2 decades.</p>


            <h4 class="darkgreen fontf">How and when to add Ferro Nickel </h4>
            <p class="mt-3 textjustify p">Ferro Nickel is to be adde just like pure Nickel plates. No special care needed.</p>


            <h4 class="darkgreen fontf">Any limitation of using Ferro Nickel</h4>
            <p class="mt-3 textjustify p">There are no limitationto the use of Ferro Nickel.</p>


            <h4 class="darkgreen fontf">Precaution of Using Ferro Nickel</h4>
            <p class="mt-3 textjustify p">The only precaution needed while using Ferro Nickel is to keep a note of the percentage of
                nickel content in thebatch being used and adjust the input weight accordingly.</p>
        </div>

    </div>
    </div>
    </div>

@endsection
