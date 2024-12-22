@extends('layouts.home_master')
@section('hometitle')
@section('home')
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .parent_container {
            width: 100%;
        }


        .logo {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>

    <!-- Main Content Section -->
    <section class="container-fluid ">
        <div class="row">
            <div class="col-md-12 green position-relative main-box" style="">
                <div class="box mt-5 position-absolute translate-middle" style="">
                    <img src="{{ asset('image/home.png') }}" alt="" class="img-fluid imgsize">
                    {{-- <div class="home-img"></div> --}}
                    <d class="d-md-block d-none" style="margin-top: -10px">
                        <ul class="list-unstyled d-flex justify-content-center gap-4 ">
                            <li><a href="{{ url('whatwebuy') }}"
                                    class="bgreen btn-green   p-3 px-5 btna btnax {{ $active == 'home' ? 'active' : '' }}">WHAT
                                    WE BUY</a></li>
                            <li><a href="{{ url('whatwesell') }}"
                                    class=" btn-green bgreen  p-3 px-5  btna btnax {{ $active == 'home' ? 'active' : '' }}">WHAT
                                    WE SELL</a></li>
                            <li><a href="{{ url('serviceweoffer') }}"
                                    class=" btn-green bgreen  p-3 btna {{ $active == 'home' ? 'active' : '' }}">SERVICE WE
                                    OFFER</a></li>
                            <li><a href="{{ url('listapprovel') }}"
                                    class=" btn-green bgreen  p-3 btna {{ $active == 'home' ? 'active' : '' }} ">LIST OF
                                    APPROVALS</a></li>
                        </ul>
                    </d>

                </div>
            </div>
        </div>
    </section>
    {{-- button --}}

    <!---button design--->

    <div class="container d-md-none d-block btncontainer">
        <div class="row gy-3">
            <div class="col-md-3 col-12">
                <a href="{{ url('whatwebuy') }}"
                    class="text-decoration-none card-a {{ $active == 'home' ? 'active' : '' }}">
                    <div class="card h-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-4 text-center p-2">
                                <img src="{{ asset('image/what-we-buy.png') }}" alt="What We Buy"
                                    class="img-fluid cardimg">
                            </div>
                            <div class="col-8">
                                <p class="mb-0 fw-bold">WHAT WE BUY</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-12">
                <a href="{{ url('whatwesell') }}"
                    class="text-decoration-none card-a {{ $active == 'home' ? 'active' : '' }}">
                    <div class="card h-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-4 text-center p-2">
                                <img src="{{ asset('image/what-we-sell.png') }}" alt="What We Sell"
                                    class="img-fluid cardimg">
                            </div>
                            <div class="col-8">
                                <p class="mb-0 fw-bold">WHAT WE SELL</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-12">
                <a href="{{ url('serviceweoffer') }}"
                    class="text-decoration-none card-a {{ $active == 'home' ? 'active' : '' }}">
                    <div class="card h-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-4 text-center p-2">
                                <img src="{{ asset('image/what-services-we-offer.png') }}" alt="Service We Offer"
                                    class="img-fluid cardimg">
                            </div>
                            <div class="col-8">
                                <p class="mb-0 fw-bold">SERVICE WE OFFER</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-12">
                <a href="{{ url('listapprovel') }}"
                    class="text-decoration-none card-a {{ $active == 'home' ? 'active' : '' }}">
                    <div class="card h-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-4 text-center p-2">
                                <img src="{{ asset('image/list-of-approvals.png') }}" alt="List of Approvals"
                                    class="img-fluid cardimg">
                            </div>
                            <div class="col-8">
                                <p class="mb-0 fw-bold">LIST OF APPROVALS</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!---button design--->

    <!-- text info -->
    <section class="container textinfo-home ">
        <p class="h1 text-center fw-bold text-green textinfo-h1 textgreen">Forging a Wealth-Generating Ecosystem Using
            Circular Economy</p>
        <p class="h3 text-center text-opacity mt-2 textinfo-h3">The Visionary Drive of Mr. Arnab Roy</p>
        <p class="h4  textjustify textinfo-h1-p ">At Refracast Metallurgicals, we've forged an ecosystem that bridges the
            gap between industrial waste
            and high performance noble metals and compounds. When others overlooked the potential in spent
            catalysts, our founder, Mr. Arnab Roy, dedicated all resources to transforming these discarded materials
            into valuable resources. His relentless innovation created a niche market for specialized ferroalloys,
            providing Indian steel producers with noble ferroalloys locally and reducing reliance on imports saving
            oil refineries on disposal costs. Moreover, Refracast stands as the world’s only recycler <strong>converting all
                alumina substrates in spent catalysts into useful products</strong> like calcium aluminate, ensuring zero
            waste generation in the recycling process. This unique ecosystem born from his visionary
            approach not only revolutionized raw material sourcing but also established him as a wealth creator.
            Our green stallion mascot symbolizes this journey, representing the strength, sustainability, and
            pioneering spirit that drive us forward.</p>
    </section>

    <!-- history timeline -->
    <div class="container mt-5 timelinemy ">
        <h1 class="text-center mb-5 fw-semibold text textinfo-h3">HISTORY OF REFMET</h1>
        <div class="row">
            <div class="timeline-horizontal-border d-md-block d-none ">
                <span class="state-line d-md-block d-none">|</span>
                <i class="fa-solid fa-arrow-down-long arrow-icons arrow-icons-left d-md-block d-none"></i>
                <i class="fa-solid fa-arrow-down-long arrow-icons arrow-icons-right d-md-block d-none"></i>
            </div>


            <div class="col-md-6 ">
                <h2 class="text-center textinfo-h3">Pioneering Raw Material Sourcing</h2>
                <div class="container my-5">
                    <!-- <h1 class="text-center mb-5">HISTORY OF REFMET</h1> -->

                    <div class="timeline ">
                        <!-- 1995 Left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="fa-regular fa-clock timeline-marker-icons"></i></div>
                            <div class="timeline-content white left">
                                <div class="timeline-date">1995</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">Refracast Metallurgicals Pvt Ltd (RMPL) was
                                    born as a
                                    greenfield project with a bold vision: to produce import
                                    substitute refractory for steel plants. This marked the
                                    beginning of our journey to bridge the gap between
                                    indigenous supply and Imports.</p>
                            </div>
                        </div>
                        <!-- 2000 left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content green">
                                <div class="timeline-date yellow ">2000</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">we developed groundbreaking technology for
                                    processing spent catalysts containing nickel the first of its kind in India showcasing
                                    our commitment to sustainability and technological advancement. We
                                    secured the first government license in India for
                                    processing these spent catalysts, setting the
                                    foundation for our leadership in waste recycling and raw
                                    material innovation. By transforming potential
                                    pollutants into valuable resources, we not only
                                    revolutionized waste management but also laid the
                                    foundation for a circular economy in the metallurgical
                                    industry.</p>
                            </div>
                        </div>
                        <!-- 2005 Left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white left">
                                <div class="timeline-date">2005</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">we made significant advancements by developing
                                    breakthrough technology to process spent catalysts
                                    containing molybdenum and cobalt. As the first in the
                                    world to introduce Calcium Molybdate in stainless steel
                                    manufacturing, we set a new global standard. Same
                                    year we developed process for recycling spent catalyst
                                    containing Cobalt.</p>
                            </div>
                        </div>
                        <!-- 2010 left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content green">
                                <div class="timeline-date yellow ">2010</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">With growing expertise, we received a permanent
                                    CPCB license, allowing us to handle hazardous
                                    waste an important milestone in expanding our
                                    capabilities and responsibilities.</p>
                            </div>
                        </div>
                        <!-- 2012 Left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white left">
                                <div class="timeline-date">2012</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">Our relentless pursuit of innovation led us to
                                    develop
                                    technologies to process spent materials containing
                                    vanadium and tungsten, pushing the boundaries of
                                    what was possible in the recycling industry.</p>
                            </div>
                        </div>
                        <!-- 2019 left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content green">
                                <div class="timeline-date yellow ">2019</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">We were granted an import license by the Ministry
                                    of
                                    Environment and Climate Change, marking our ability
                                    to operate on an international scale. This allowed us to
                                    successfully carry out our first transboundary
                                    hazardous waste movement—a pioneering
                                    achievement.</p>
                            </div>
                        </div>
                        <!-- 2021 Left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></i></div>
                            <div class="timeline-content white left">
                                <div class="timeline-date">2021</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">In response to the growing demand for
                                    composite metal
                                    recycling, we inaugurated a hydrometallurgical unit to
                                    produce Cobalt Oxide, Nickel Oxide, and Ferric Oxide,
                                    meeting the needs of industries requiring high-grade
                                    materials unsuitable for thermal recycling.</p>
                            </div>
                        </div>
                        <!-- 2022 left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons"></i></i></div>
                            <div class="timeline-content green">
                                <div class="timeline-date yellow ">2022</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">We expanded further by establishing Oricon
                                    Metallurgicals Pvt Ltd, a startup recognized by the
                                    Government of India. This new unit strengthened our
                                    focus on innovative recycling solutions.</p>
                            </div>
                        </div>
                        <!-- 2023 Left -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></i></div>
                            <div class="timeline-content white left">
                                <div class="timeline-date">2023</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">Our collaboration with Indian Oil Corporation
                                    Limited
                                    (IOCL) moved from lab trials to pilot plant trials, focusing
                                    on the application of bulk catalysts like FCC, RFCC, and
                                    Indmax in industries beyond cement setting the stage
                                    for future growth.</p>
                            </div>
                        </div>
                        <!-- 2024 left -->
                        <div class="timeline-item  ms-5 timelineitem-left" style="margin-bottom:-35% ">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content green">
                                <div class="timeline-date yellow ">2024</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">Set up new manufacturing set up for handling and
                                    recycling of 15,000 metric tons per annum of oily spent
                                    catalyst generated for ARDS, EDU and Residue
                                    Upgradation Facility (RUF), representing a massive
                                    step forward in waste management and resource
                                    recovery.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <h2 class="text-center mt-1 textinfo-h3">Milestones in Client Innovation</h2>
                <div class="container mt-5">
                    <!-- <h1 class="text-center mb-5">HISTORY OF REFMET</h1> -->

                    <div class="timeline ">
                        <!-- 1995 right -->
                        <div class="timeline-item  ms-5" style="margin-top: 0%;">
                            <div class="timeline-marker outline-marker"><i
                                    class="fa-solid fa-clock timeline-marker-icons text-green"></i></div>
                            <div class="timeline-content left green">
                                <div class="timeline-date yellow">1995</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify">Refracast Metallurgicals Pvt Ltd (RMPL) was born
                                    as a
                                    greenfield project with a bold vision: to produce import
                                    substitute refractory for steel plants. This marked the
                                    beginning of our journey to bridge the gap between
                                    indigenous supply and Imports.</p>
                            </div>
                        </div>
                        <!-- 1997 right -->
                        <div class="timeline-item  ms-5 " style="margin-top: 26%;">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white ">
                                <div class="timeline-date ">1997</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify">In 1997, we pioneered the production of pre
                                    melted
                                    Calcium Aluminate, known as Synthetic Slag, in India.
                                    Through our ground-breaking use of electric arc
                                    furnace melting processes, we became the world's first
                                    to utilize industrial waste for making Synthetic Slag for
                                    secondary steel refining. This innovation eliminated
                                    the need for LDSF imports and revolutionized the
                                    steel-making industry in India.</p>
                            </div>
                        </div>
                        <!-- 2000 right -->
                        <div class="timeline-item  ms-5 " style="margin-top: 29%;">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons text-green"></i></div>
                            <div class="timeline-content left green">
                                <div class="timeline-date yellow">2000</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify py-4">Continuing our innovative streak, we
                                    developed Ferro
                                    Nickel Moly for the first time in India bringing
                                    significant cost savings to stainless steel
                                    manufacturers while providing a locally sourced
                                    alternative to imported materials.</p>
                            </div>
                        </div>
                        <!-- 2005 right -->
                        <div class="timeline-item  ms-5"style="margin-top: 26%;">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white ">
                                <div class="timeline-date ">2005</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify py-4">Our R&D efforts led to the creation of
                                    FerroCobalt,
                                    further solidifying our position as a leader in producing
                                    critical import substitutes for the Indian market
                                    ensuring we stayed ahead of market needs.</p>
                            </div>
                        </div>
                        <!-- 2006 right -->
                        <div class="timeline-item  ms-5"style="margin-top: 28%;">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons text-green"></i></div>
                            <div class="timeline-content left green">
                                <div class="timeline-date yellow">2006</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify pt-3 pb-5">We introduced Calcium Molybdate,
                                    revolutionizing the
                                    steel industry with a cost saving, homegrown
                                    alternative to Moly Oxide and Ferro Molybdenum
                                    imports.</p>
                            </div>
                        </div>
                        <!-- 2010 right -->
                        <div class="timeline-item  ms-5">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white ">
                                <div class="timeline-date ">2010</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify mb-4">In response to industry demand, we
                                    developed Ferro
                                    Vanadium, Ammonium Metavanadate, and Vanadium
                                    Pentoxide flakes transforming the ferroalloy landscape.</p>
                            </div>
                        </div>
                        <!-- 2012 right -->
                        <div class="timeline-item  ms-5"style="margin-top: 29%;">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons text-green"></i></div>
                            <div class="timeline-content left green">
                                <div class="timeline-date yellow">2012</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify py-4">We introduced Ferro Tungsten Moly, an
                                    innovative
                                    product that brought major cost savings for high-speed
                                    steel manufacturers, further proving our commitment to
                                    delivering unique solutions.</p>
                            </div>
                        </div>
                        <!-- 2020 right -->
                        <div class="timeline-item  ms-5"style="margin-top: 30%;">
                            <div class="timeline-marker"><i class="bi bi-dash-lg timeline-marker-bs-icons"></i></div>
                            <div class="timeline-content white ">
                                <div class="timeline-date ">2020</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p text-green textjustify py-2">After years of dedicated R&D, we
                                    developed Vanadium
                                    Pentoxide, now crucial for advanced battery storage
                                    technologies a testament to our forward-looking
                                    innovation.</p>
                            </div>
                        </div>
                        <!-- 2021 right -->
                        <div class="timeline-item  ms-5 timelineitem-right"style="margin-bottom: -26%;">
                            <div class="timeline-marker outline-marker"><i
                                    class="bi bi-dash-lg timeline-marker-bs-icons text-green"></i></div>
                            <div class="timeline-content left green">
                                <div class="timeline-date yellow">2021</div>
                                <!-- <div class="timeline-title">Pioneering Raw Material Sourcing</div> -->
                                <p class="timeline-p yellow textjustify py-3">We expanded our expertise into the color and
                                    pigment
                                    industry, developing high-grade materials like Cobalt
                                    Oxide, Nickel Oxide, and Ferric Oxide, broadening our
                                    market presence and reinforcing our role as a leader in
                                    specialized industries.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- </div> -->


        </div>
        <div class="">
            <button class="btn top shadow" id="toggle-btn"><span class="span">View More</span><i
                    class="fa-solid fa-angle-down outline-span "></i></button>
            {{-- <p class=" top" id="toggle-btn"><span class="span">View More</span><i class="bi bi-chevron-down outline-span"></i></p> --}}
        </div>
    </div>

    <!-- new counter start  -->
    <section>
        <div class="container-fluid mt-5">
            <div class="row d-flex mx-3">

                <div class="col-md-12">
                    <img src="{{ asset('image/counter-image.png') }}" alt="" class="img-fluid imgfluid">
                    {{-- <div class="test-img"></div> --}}
                    {{-- <div class="image-box"></div> --}}
                </div>

            </div>
            <div class="row d-flex g-1 shadow mx-4">
                <div class="col-md-3  p-lg-5 p-md-4 bg-light text-md-start text-center col-p5 col3">
                    <h3 class="timer counter alt-font appear counter-span " data-to="100000"
                        data-speed="7000"id="counter-span fs-1">100000</h3>
                    <span class=" counter-p "style="color: #043927;">Over 100000 MT of
                        spent catalyst recycle</span>
                </div>
                <div class="col-md-3 border p-lg-5 p-md-4 bg-light text-md-start text-center col3">
                    <h3 class="timer counter alt-font appear counter-span " data-to="12000"
                        data-speed="7000"id="counter-span">12000</h3>
                    <span class=" counter-p "style="color: #043927;">Over 12,000 MT of
                        metal produced</span>
                </div>
                <div class="col-md-3 border p-lg-5 p-md-4 bg-light text-md-start text-center col3">
                    <h3 class="timer counter alt-font appear counter-span " data-to="100"
                        data-speed="7000"id="counter-span">100</h3>
                    <span class=" counter-p "style="color: #043927;">100 Acers of land
                        bio saved</span>
                </div>
                <div class="col-md-3 p-lg-5 p-md-4 bg-light text-md-start text-center col3">
                    <h3 class="timer counter alt-font appear counter-span " data-to="6"
                        data-speed="7000"id="counter-span">6</h3>
                    <span class=" counter-p "style="color: #043927;">Foot print over 6
                        countries</span>
                </div>
            </div>
        </div>
    </section>
    <!-- new counter start -->

    <!-- our process start -->
    <div class="container mt-5">
        {{-- <h1 class="text-center display-4 " style="font-weight: bold;">Our Process</h1> --}}
        <div class="row">
            <div class="col-md-12">
                {{-- <img src="{{asset('image/our-process.png')}}" alt="" class="img-fluid ourprocess"> --}}
                <div class="ourprocess"></div>

            </div>
        </div>
    </div>
    <!-- our process end -->



    <marquee behavior="scroll" direction="left" scrollamount="20">
        <div class="d-flex parent_container gap-5 flex-row">
            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>
        </div>
    </marquee>

    <marquee behavior="scroll" direction="right" scrollamount="20">
        <div class="d-flex parent_container flex-row gap-5">
            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>

            <div>
                <img height="100" width="100" src="{{ asset('image/products.PNG') }}" alt="">
            </div>
        </div>
    </marquee>




@endsection

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        function showTimeline() {
            let showtime = document.querySelectorAll('.timeline-item');
        }

        let clickCount = 0; // Variable to keep track of the number of clicks

        document.getElementById('toggle-btn').addEventListener('click', function() {
            // Get all elements with the class 'timeline-element'
            var elements = document.querySelectorAll('.timeline-item');

            clickCount++; // Increment the click count

            if (clickCount % 2 !== 0) {
                // First click: Show all elements
                elements.forEach(function(element) {
                    element.style.display = 'block';
                });
            } else {
                // Next clicks: Show only elements at index 0, 1, 10, 11
                elements.forEach(function(element, index) {
                    if (index === 0 || index === 1 || index === 10 || index === 11) {
                        element.style.display = 'block';
                    } else {
                        element.style.display = 'none';
                    }
                });
            }
        });

        // Initialize by showing only the elements at index 0, 1, 10, 11
        document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.timeline-item');
            elements.forEach(function(element, index) {
                if (index === 0 || index === 1 || index === 10 || index === 11) {
                    element.style.display = 'block';
                } else {
                    element.style.display = 'none';
                }
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");
            counters.forEach((counter) => {
                const animateCounter = () => {
                    const target = +counter.getAttribute("data-to"); // Final value
                    const speed = +counter.getAttribute("data-speed"); // Animation duration
                    const increment = target / (speed / 50); // Increment per tick

                    let value = 0;
                    const interval = setInterval(() => {
                        value += increment;
                        if (value >= target) {
                            value = target;
                            clearInterval(interval);
                        }
                        counter.textContent = Math.floor(value);
                    }, 50);
                };
                animateCounter();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10, // Delay in ms
                time: 2000 // Animation duration in ms
            });
        });
    </script>
@endpush
