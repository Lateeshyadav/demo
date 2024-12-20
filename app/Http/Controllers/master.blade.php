<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refmet</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('FontAwsome_v6/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/aside.css')}}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"> --}}

    <link href="{{asset('public/refmet/assets/images/favicon/favicon.png')}}" rel="icon">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&display=swap">
  {{-- <link rel="stylesheet" href="{{asset('refment/assets/css/libraries.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/assets/css/style.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/assets/bs/css/bootstrap.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/style.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/timeline.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/timelinefirst.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/countercss.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/media.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('refmet/assets/bs/FontAwsome_v6/css/all.css')}}"> --}}
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-4/assets/css/timeline-4.css">

    <style>
         @media(max-width:576px){
            .h1-textinfo{
                margin-left: -39px;
                margin-top: -19%
            }
         }  
         @media(max-width:576px){
            .text-underline{
            position:inherit;
          }
          .text-underline::before{
            background-color: white;
          }
          .nav-margin-left{
            margin-left:0% ;
            overflow: hidden;
             transition: left 0.3s ease;
             
            /* align-items: center; */
            text-align: justify
          }
         }    
        
    </style>
</head>
<body>
    
         <!-- Contact Info Navbar -->
    <nav class="navbar navbar-expand-sm green d-none d-sm-block">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-fontsize yellow" href="#"><i class="fa-solid fa-phone"></i> 98935 94094</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 yellow" href="#"><i class="fa-solid fa-envelope"></i> kunal@refmet.org</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-5 yellow" href="#"><i class="fa-solid fa-clock"></i> Mon-Sat: 10:00 am - 7:00 pm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Navbar -->
    <div class="stickytop">
    <nav class="navbar navbar-expand-sm white">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand mx-auto" href="#">
                {{-- <img class="log" src="{{asset('refmet/assets/images/logo/logo.png')}}" alt="Logo"> --}}
                <img class="log" src="{{asset('image/logo.png')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center " id="navbarContent">
                <ul class="navbar-nav nav-margin-left">
                    <li class="nav-item ">
                        <a class="nav-link  fs-4 mx-3 text-green text-underline" href="{{url('/')}}" id="clickable-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-4 mx-3 text-green text-underline " href="{{url('/about')}}" id="clickable-about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-4 mx-3 text-green text-underline {{ ($active == 'product')?'active':'' }}" href="{{url('/product')}}" id="clickable-product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 mx-3 text-green text-underline" href="{{url('/suppliers')}}" id="clickable-suppliers">Suppliers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-4 mx-3 text-green text-underline d-md-none d-block" href="{{url('/contact')}}" id="clickable-link">Contact Us</a>
                    </li>
                </ul>
                <a class="nav-link fs-4 p-2 btn green yellow btncontact d-md-block d-none" href="{{url('/contact')}}" id="clickable-link">Contact Us</a>
            </div>
        </div>
    </nav>
    </div>
    
   
    <!-- Main Content Section -->
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12 green position-relative main-box" style="">
                <div class="box mt-5 position-absolute translate-middle" style="">
                    <img src="{{asset('image/list-of-approvals.png')}}" alt="" class="img-fluid imgsize">
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



    @section('content')
    @show



      <!-- footer start -->
      <div class="container-fluid mt-5 " style="border-radius: 30px 30px 0 0;background-color: #024430;">
        <div class="row mt-5  footer-row-first">
            <div class="col-md-6 mt-5">
                {{-- <h1 class="footer-h1">Request a call back                      --}}
                </h1>
            </div>
            <div class="col-md-6 mt-5">
                {{-- <form action="" class="form-group">
                    <input type="text" class="footer-input" placeholder="Enter you name">
                    <input type="text" class="footer-input" placeholder="Enter you number">
                    <button class="footer-btn btn-yellow ">Submit</button>
                </form> --}}
            </div>
        </div>
        <div class="row bg-white footer-row-second" style="border-radius: 50px 50px 0 0;">
            <div class="col-md-4 col-12 ps-5">
                <img src="{{asset('refmet/assets/images/logo/logo.png')}}" alt="" style="width: 40%;" class="mb-4">
                <p class=" h5 textjustify footer-p">Refracast Metallurgicals Pvt Ltd (RMPL) 
                    stands as a prominent leader in the 
                    metallurgical industry, specializing in spent 
                    catalyst recycling and innovative solutions for 
                    the steel-making sector in India. Established 
                    in 1995 in Raipur, Chhattisgarh, our company 
                    has consistently demonstrated its pioneering 
                    capabilities through relentless research and 
                    development, setting us apart as a trendsetter 
                    in the industry</p>
            </div>
            <div class="col-md-4 ps-5 col-6 text-center">
                <h1 class="mb-5 mt-4 ms-4 footer-h">Company</h1>
                <ul>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="/refmet.html">Home</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="/about.html">About</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="">Career</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="">Team</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/contact'}}">Contact</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <h1 class="mb-5 mt-4 ms-5 footer-h">Location</h1>
                {{-- <ul>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/zslagcan'}}">Z-Slag Can</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/zslagcaal50'}}">Z-Slag CA-AL50</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/zslagcaal20'}}">Z-Slag CA-AL20</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/slagkills'}}">SLAG KILL 100</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/ferronickel'}}">FERRO NICKEL</a></li>
                    <li class="footer-row-second-li"><a class="footer-row-second-a" href="{{'/ferronickelmoly'}}">FERRO NICKEL MOL</a></li>
                </ul> --}}
                <ul>
                    <li class="footer-row-second-li li textjustify"><p><strong>Corporate Office Address :</strong> 
                        Crown Building &nbsp &nbsp Ashoka Park,Opposite Khamardih Police Station, Near Devkripa Hospital Shankar Nagar
                         Raipur (CG)-492001</p>
                    </li>
                    <li class="footer-row-second-li li textjustify"><p><strong>Phone :</strong> 98935 94094</p></li>
                    <li class="footer-row-second-li li textjustify"><p><strong>Email :</strong> kunal@refmet.org</p></li>
                </ul>
            </div>
            <hr class="mt-5">
        </div>
               
        <div class="row bg-white">
            <div class="col-md-12">
                <h5 class="text-center mt-0 footer-copy">Copyright © 2022 - 2024. Refracast Metallurgicals Pvt. Ltd. | All Rights Reserved.</h5>
            </div>
        </div>
     </div>
    <!-- footer end -->
  
  
  
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('refmet/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('refmet/assets/js/plugins.js')}}"></script>
  {{-- <script src="{{asset('refmet/assets/js/main.js')}}"></script> --}}
  {{-- <script src="{{asset('refmet/assets/bs/js/bootstrap.bundle.js')}}"></script> --}}
  {{-- <script src="{{asset('refmet/assets/bs/FontAwsome_v6/js/fontawesome.min.js')}}"></script> --}}
  <script src="{{asset('refmet/assets/bs/FontAwsome_v6/js/fontawesome.min.js')}}"></script>
  <script>
      const links = document.querySelectorAll('.text-underline');

// Add click event to each link
links.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default anchor behavior (optional if testing)

        // Remove the active class from all links
        links.forEach(l => l.classList.remove('active'));

        // Add the active class to the clicked link
        this.classList.add('active');
        const targetUrl = this.getAttribute('href');
        window.location.href = targetUrl;
    });
});
  </script>
   {{-- <script>
    // Select all navigation links
    const navLinks = document.querySelectorAll('.text-underline');

    navLinks.forEach(link => {
      link.addEventListener('click', function (event) {
        // Prevent default link behavior
        // event.preventDefault();

        // Remove 'active' class from all links
        navLinks.forEach(l => l.classList.remove('active'));

        // Add 'active' class to the clicked link
        this.classList.add('active');

        // Optional: Navigate to the section if needed
        const target = this.getAttribute('href');
        // window.location.hash = target;
        history.pushState(null, '', target);
      });
    });
  </script> --}}
  
  </body>
  </html>
  