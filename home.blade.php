@extends('layouts.master')
@section('content')
    <div class="wrapper">

        {{-- <section id="slider1" class="slider slider-1 border"> --}}
        {{-- start image design --}}
        <section
            style="background-image: url('{{ asset('public/refmet/demo4/images/slider02.jpg') }}');background-repeat: no-repeat;background-size: cover;">
            <div class="container-fluide container-img-fluide">
                <div class="row">
                    <div class="col-md-12 col-12 first-col-12 ">
                        {{-- <div class="first-image"> --}}
                        {{-- <img src="{{asset('refmet/demo4/images/banners.jpg')}}" alt="" class=" img-fluid"> --}}
                        {{-- </div> --}}

                    </div>
                </div>
            </div>
        </section>
        {{-- end image design --}}
        <section class="my-5 ">
            <div class="container mt-5">
                <div class="row text-center">
                    <!-- First Column (What We Buy & What We Sell) -->
                    <div class="col-lg-6 col-md-6 col-6 ">
                        <div class="row py-3">
                            <div class="col-md-12 col-12 py-3 col6-padding ">
                                <div class="py-0 text-justify">
                                    <h1 class="first-h1 ">What We Buy</h1>
                                    <div class="pt-0 first-ai">
                                        <p class="first-p ">We are actively seeking material containing.</p>
                                        <a href="#" class="text-decoration-none btn btn-outline border"
                                            id="first-btn-a">
                                            Read More <i class="fa-solid fa-arrow-right" id="first-i"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 col-12 py-2 my-1 col6-padding">
                                <div class="py-0 text-justify">
                                    <h1 class="first-h1 firsth1">What We Sell</h1>
                                    <p class="first-p firstp">Synthetic slag (slag cement for steel plants).</p>
                                    <div class="pt-0 first-ai">
                                        <a href="#" class="text-decoration-none btn btn-outline border"
                                            id="first-btn-a">
                                            Read More <i class="fa-solid fa-arrow-right" id="first-i"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column (Image) -->
                    {{-- <div class="col-lg-4 col-md-12 col-12 order-lg-2 order-3 my-4">
                    <img src="{{asset('refmet/demo4/images/a.jpg')}}" alt="" class="img-fluid">
                  </div> --}}

                    <!-- Third Column (Services & Approvals) -->
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row py-3">
                            <div class="col-md-12 col-12 py-0">
                                <div class="pt-3 text-align-justify">
                                    <h1 class="first-h1">What Services We Offer</h1>
                                    <p class="text-justify first-p">Metal reclamation from rejected industrial precursors.
                                    </p>
                                    <div class="first-ai pb-2">
                                        <a href="#" class="text-decoration-none btn btn-outline border"
                                            id="first-btn-a">
                                            Read More <i class="fa-solid fa-arrow-right" id="first-i"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-12 py-0">
                                <div class="py-3 text-justify">
                                    <h1 class="first-h1">List Of Approvals</h1>
                                    <p class="first-p">Approval of import from Directorate General of Foreign Trade, Govt.
                                        of India.</p>
                                    <div class="first-ai">
                                        <a href="#" class="text-decoration-none btn btn-outline border"
                                            id="first-btn-a">
                                            Read More <i class="fa-solid fa-arrow-right" id="first-i"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- </section> --}}




        {{-- first timeline --}}

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <div class="container bootstrap snippets bootdey">
            <section id="news" class="white-bg padding-top-bottom">
                <div class="container bootstrap snippets bootdey">
                    <div class="timeline">
                        <div class="date-title">
                            {{-- <span> 1995</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>1995</p> --}}
                                        {{-- <small>Fri</small> --}}
                                    </div>
                                    <h2 class="news-title">1995</h2>
                                    <div class="news-media">
                                        {{-- <a class="colorbox cboxElement" href="#">
                                    <img class="img-responsive" src="https://www.bootdey.com/image/400x400/FFB6C1/000000" alt="">
                                </a> --}}
                                    </div>
                                    <p>Our Visionary founders had established the brand REFMET in the year 1995 With deep
                                        understanding of micro and macro economics the company focused on developing
                                        home-grown technology to develop import substitute products. In the quest we
                                        pioneered production of Calcium Molybdate globally and Synthetic Slag in India
                                        before us it was all imported.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>1995</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">1995</h2>
                                    <div class="news-media gallery">
                                        {{-- <a class="colorbox cboxElement" href="#">
                                    <img class="img-responsive" src="https://www.bootdey.com/image/400x400/87CEFA/000000" alt="">
                                </a> --}}
                                        <a class="colorbox cboxElement" href="#"></a>
                                    </div>
                                    <p>Refracast Metallurgicals Pvt Ltd -RMPL, was Founded in 1995 as a green field project
                                    </p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                  <div class="col-sm-6 news-item">
                      <div class="news-content">
                          <div class="date">
                              <p>26</p>
                              <small>Wen</small>
                          </div>
                          <h2 class="news-title">Title 3</h2>
                          <div class="news-media video">
                              <a class="colorbox-video cboxElement" href="#">
                                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/7B68EE/000000" alt="">
                              </a>
                          </div>
                          <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized…</p>
                          <a class="read-more" href="#">Read More</a>
                      </div>
                  </div>

                  <div class="col-sm-6 news-item right">
                      <div class="news-content">
                          <div class="date">
                              <p>25</p>
                              <small>Tue</small>
                          </div>
                          <h2 class="news-title">Title 4</h2>
                          <div class="news-media gallery">
                              <a class="colorbox cboxElement" href="#">
                                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/BA55D3/000000" alt="">
                              </a>
                              <a class="colorbox cboxElement" href="#"></a>
                          </div>
                          <p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains…</p>
                          <a class="read-more" href="#">Read More</a>
                      </div>
                  </div>
              </div> --}}

                        <div class="date-title">
                            {{-- <span>1997</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">1997</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                              </a> --}}
                                    </div>
                                    <p>We developed pre-melted Calcium Aluminate Synthetic Slag for the first time in India.
                                        We became first in the world to use electric furnace melting process to produce
                                        Synthetic Slag. Used in secondary steel refining, it became an important import
                                        substitute replacing LDSF.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">1997</h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>1998</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">1998</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                                <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                            </a> --}}
                                    </div>
                                    <p>We started the manufacturing of Ferro Nickel with Nickel content between 40- 70% as a
                                        substitute for pure nickel import in India.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">1998</h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2000</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2000</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                              <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                          </a> --}}
                                    </div>
                                    <p>We developed Ferro Nickel Moly for the first time in India as a major cost saving raw
                                        material for Stainless Steel manufactures. Over the years, it has found immense
                                        success and has proven to be a major source of Indigenous source of Molybdenum and
                                        Nickel In India</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2000</h2>
                                    <p>Got first license for processing spent catalyst containing nickel by the government
                                        in India</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2005</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2005</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                            <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                        </a> --}}
                                    </div>
                                    <p>We started producing Ammonium Para Tungstate (APT) and Ferro Tungsten from
                                        unconventional raw material. It served as an import substitute for APT.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2005</h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2006</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2006</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                          <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                      </a> --}}
                                    </div>
                                    <p>We were the first to develop and introduce Calcium Molybdate in the steel industry.
                                        Calcium Molybdate is a cost saving replacement and import substitute for Moly Oxide
                                        and Ferro Molybdenum.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2006</h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2010</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2010</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                        <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                    </a> --}}
                                    </div>
                                    <p>We developed Ferro Vanadium, Ammonium Metavanadate, and Vanadium Pentoxide flakes
                                        with more than 70% of value addition done in India qualifying us as a Class
                                        1 local supplier.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2010</h2>
                                    <p>Received permanent CPCB license for handling hazardous waste</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2012</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2012</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                      <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                  </a> --}}
                                    </div>
                                    <p>We developed Ferro Tungsten Moly a major cost saver for the High Speed Steel
                                        industry.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2012</h2>
                                    <p>Developed calcium molybdate, ammonium metavanadate, Ammonium
                                        para tungstate in India</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2020</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2020</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                    <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
                </a> --}}
                                    </div>
                                    <p>After years of rigorous R&D, we developed Vanadium Pentoxide of advanced battery
                                        storage grade.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2020</h2>
                                    <p>Developed in house hydro metallurgy with zero waste technology</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2021</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2021</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
              </a> --}}
                                    </div>
                                    <p>In order to further reduce import deficit of our nation we developed raw material for
                                        metal oxide pigment industry and in the quest we started making Cobalt Oxide.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2021</h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2022</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
              </a> --}}
                                    </div>
                                    {{-- <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <p>We got import license from Ministry of Enviroment and Climate Change Government of
                                        India.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
            </a> --}}
                                    </div>
                                    {{-- <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <p>1 Successful Import and transboundary Hazardous Waste movement was carried out.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
            </a> --}}
                                    </div>
                                    {{-- <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2022</h2>
                                    <p>Setup new unit in the name of Oricon Metallurgicals Pvt Ltd-recognized by Government
                                        of India as a STARTUP-unit.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2023</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2023</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
              </a> --}}
                                    </div>
                                    {{-- <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2023</h2>
                                    <p>Joint research with IOCL (Indian Oil Corporation Limited) for application of FCC,
                                        RFCC, Indmax unit bulk catalyst other than coprocessing in cement Industry</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            {{-- <span>2024</span> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>27</p> --}}
                                        {{-- <small>Thu</small> --}}
                                    </div>
                                    <h2 class="news-title">2024</h2>
                                    <div class="news-media video">
                                        {{-- <a class="colorbox-video cboxElement" href="#">
                  <img class="img-responsive" src="https://www.bootdey.com/image/400x400/DA70D6/000000" alt="">
              </a> --}}
                                    </div>
                                    {{-- <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p> --}}
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        {{-- <p>24</p> --}}
                                        {{-- <small>Mon</small> --}}
                                    </div>
                                    <h2 class="news-title">2024</h2>
                                    <p>In talks with HPCL (Hindustan Petroleum Corporation Limited) for 15 Million Metric
                                        Tons Per Annum handling and recycling of their Residue Upgradation
                                        Facility (RUF) unit.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- end timelinefirst --}}


        {{-- start counter --}}

        <div class="counter-height">
            <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="row">
                        <!-- counter -->
                        <div class="col-md-3 col-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                            data-wow-duration="300ms"
                            style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class=""></i>
                                    <span id="anim-number-pizza" class="counter-number"></span>
                                    <span class="timer counter alt-font appear counter-span" data-to="980"
                                        data-speed="7000" id="counter-span">2800</span>
                                    <span class="counter-title">Products</span>
                                </div>
                                <div class="col-md-6">
                                    <p id="counter-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
                                        laboriosam?</p>
                                </div>
                            </div>

                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                            data-wow-duration="600ms"
                            style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class=""></i>
                                    <span class="timer counter alt-font appear counter-span" data-to="980"
                                        data-speed="7000"id="counter-span">980</span>
                                    <span class="counter-title">Employees</span>
                                </div>
                                <div class="col-md-6">
                                    <p id="counter-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima,
                                        numquam?</p>
                                </div>
                            </div>

                        </div>

                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-12 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                            data-wow-duration="900ms"
                            style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class=""></i>
                                    <span class="timer counter alt-font appear counter-span" data-to="810"
                                        data-speed="7000"id="counter-span">810</span>
                                    <span class="counter-title">Projects Completed</span>
                                </div>
                                <div class="col-md-6">
                                    <p id="counter-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, animi?
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-12 text-center counter-section wow fadeInUp animated"
                            data-wow-duration="1200ms"
                            style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class=""></i>
                                    <span class="timer counter alt-font appear counter-span " data-to="600"
                                        data-speed="7000"id="counter-span">600</span>
                                    <span class="counter-title">Clients Served</span>
                                </div>
                                <div class="col-md-6">
                                    <p id="counter-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
                                        dolores.</p>
                                </div>
                            </div>

                        </div>
                        <!-- end counter -->
                    </div>
                </div>
            </section>
        </div>

        {{--  end counter --}}


        {{-- start our process --}}
        <section class="our-process d-sm-block d-none">
            {{-- <div class=""> --}}
            <img src="{{ asset('public/refmet/demo4/images/refmet2.org.jpg') }}" alt="" class=" img-flued">
            {{-- </div>  --}}
        </section>
        <section class="our-process d-sm-none d-block">
            {{-- <div class=""> --}}
            <img src="{{ asset('public/refmet/demo4/images/refmet.org.jpg') }}" alt="" class=" img-flued">
            {{-- </div>  --}}
        </section>
        {{-- start our process --}}

        {{-- start Address info  --}}
        <div class="container-fluid py-3">
            <div class="card float-left">
                <div class="row ">
                    <div class="col-sm-7 shadow">
                        <div class="card-block">
                            <section class="articles">
                                <article>
                                    <div class="article-wrapper">
                                        <div class="article-body">
                                            <div class="shadow">
                                                <h2 class="add-h2">Factory Address :</h2>
                                                {{-- <h4 class="add-h4">
                        Refracast Metallurgicals Private Limited, 22- Industrial Area, Bhanpuri, P.O. Birgaon, Raipur 493221 (CG)
                      </h4> --}}
                                                <p class="text-justify text-dark"><i
                                                        class="fa-solid fa-location-dot p-2"></i><span>Address
                                                        :</span>Refracast Metallurgicals Private Limited, 22- Industrial
                                                    Area, Bhanpuri, P.O. Birgaon, Raipur 493221 (CG)</p>
                                                <p class="text-dark"><i class="fa-solid fa-phone p-2 "></i><span>Phone No.
                                                        :</span>+91 9893594094</p>
                                                <p class="text-dark"><i class="fa-solid fa-envelope p-2"></i><span>Email
                                                        :</span>kunal@refmet.org</p>
                                            </div>
                                        </div>
                                        <div class="article-body">
                                            <div class="shadow">
                                                <h2>Corporate Office Address :</h2>
                                                {{-- <h3>
                            Crown Building, Ashoka Park, Opposite Khamardih Police Station, Shankar Nagar, Landmark - near Devkripa Hospital. 492001
                        </h3>  --}}
                                                <p class="text-justify text-dark"><i
                                                        class="fa-solid fa-location-dot p-2"></i><span>Address
                                                        :</span>Crown Building, Ashoka Park, Opposite Khamardih Police
                                                    Station, Shankar Nagar, Landmark near Devkripa Hospital.
                                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;492001</p>
                                                <p class="text-dark"><i class="fa-solid fa-phone p-2"></i><span>Phone No.
                                                        :</span>+91 9893594094</p>
                                                <p class="text-dark"><i class="fa-solid fa-envelope p-2"></i><span>Email
                                                        :</span>kunal@refmet.org</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-5 shadow">
                        <img class="d-block w-100 pt-4" src="{{ asset('public/refmet/demo4/images/about-us.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        {{-- end Address info  --}}
    @endsection
