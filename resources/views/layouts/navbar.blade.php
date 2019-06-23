<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta charset="utf-8">
  <title>365HOMEIMPROVEMENT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>
<body>
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-sm fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/banner.png"></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
          <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
            <div class="row">
             <div class="col-md-3">
              <ul>
                <li class="dropdown-header">A</li>
                <li><a href="#">Antenna Services</a></li>
                <li><a href="#">Asbestos Removal</a></li>
                <li><a href="#">Appliance Installation</a></li>
                <li><a href="#">Awning Suppliers</a></li>
                <li><a href="#">Appliance Repairs</a></li>
                <li><a href="#">Awnings</a></li>
                <li><a href="#">Architecture</a></li>
              </ul><br>
            </div> 
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">B</li>
                <li><a href="#">Balustrading</a></li>
                <li><a href="#">Blinds</a></li>
                <li><a href="#">Building Designer</a></li>
                <li><a href="#">Bamboo Flooring</a></li>
                <li><a href="#">Bricklaying</a></li>
                <li><a href="#">Building Supplies</a></li>
                <li><a href="#">Bath & Basin Resurfacing</a></li>
                <li><a href="#">Building Certifiers</a></li>
                <li><a href="#">Building Surveyors</a></li>
                <li><a href="#">Bathroom Accessories</a></li>
                <li><a href="#">Building Consultants</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">C</li>
                <li><a href="#">Cabinet Making</a></li>
                <li><a href="#">Ceilings</a></li>
                <li><a href="#">Concrete Kerbs</a></li>
                <li><a href="#">Carpet Repair & Laying</a></li>
                <li><a href="#">Chimney Sweepers</a></li>
                <li><a href="#">Concrete Resurfacing</a></li>
                <li><a href="#">Carpets</a></li>
                <li><a href="#">Cladding</a></li>
                <li><a href="#">Curtains</a></li>
                <li><a href="#">Carports</a></li>
                <li><a href="#">Cleaning Services - Commercial</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">D</li>
                <li><a href="#">Damp Proofing</a></li>
                <li><a href="#">Demolition</a></li>
                <li><a href="#">Door Suppliers</a></li>
              </ul><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">E</li>
                <li><a href="#">Equipment Hire</a></li>
                <li><a href="#">Excavation</a></li>
                <li><a href="#">Extensions & Additions</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">F</li>
                <li><a href="#">Feng Shui</a></li>
                <li><a href="#">Floor Coatings</a></li>
                <li><a href="#">Flyscreens</a></li>
                <li><a href="#">Furniture - Custom Design</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">G</li>
                <li><a href="#">Garages</a></li>
                <li><a href="#">Gates</a></li>
                <li><a href="#">Gutter Protection</a></li>
                <li><a href="#">Garden Designer</a></li>
                <li><a href="#">Gazebo</a></li>
                <li><a href="#">Garden Maintenance</a></li>
                <li><a href="#">Gas Fitters</a></li>
                <li><a href="#">Gutter Cleaning</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">H</li>
                <li><a href="#">Handrails</a></li>
                <li><a href="#">Home Security Products</a></li>
                <li><a href="#">Heaters</a></li>
                <li><a href="#">Home Theatre</a></li>
                <li><a href="#">Heating Systems</a></li>
                <li><a href="#">Homewares</a></li>
                <li><a href="#">Home Automation</a></li>
                <li><a href="#">Hot Water Systems</a></li>
              </ul><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">I</li>
                <li><a href="#">IKEA Bathrooms</a></li>
                <li><a href="#">Inspections - Pest</a></li>
                <li><a href="#">Irrigation Systems</a></li>
                <li><a href="#">IKEA Kitchen Installers</a></li>
                <li><a href="#">Insulation</a></li>
                <li><a href="#">IKEA Lighting Installation and Assembly</a></li>
                <li><a href="#">Interior Decorating</a></li>
                <li><a href="#">Inspections - Building</a></li>
                <li><a href="#">Interior Designer</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">J</li>
                <li><a href="#">Joinery</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">K</li>
                <li><a href="#">Kitchen Design</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">L</li>
                <li><a href="#">Landscape Architecture</a></li>
                <li><a href="#">Limestone</a></li>
                <li><a href="#">Lawn & Turf</a></li>
                <li><a href="#">Locksmiths</a></li>
                <li><a href="#">Lawn Mowing</a></li>
                <li><a href="#">Lighting</a></li>
              </ul><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">M</li>
                <li><a href="#">Mirrors</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">P</li>
                <li><a href="#">Patios</a></li>
                <li><a href="#">Pool Heating</a></li>
                <li><a href="#">Professional Organisers</a></li>
                <li><a href="#">Pergolas</a></li>
                <li><a href="#">Pool Maintenance</a></li>
                <li><a href="#">Project Management</a></li>
                <li><a href="#">Pool Builders</a></li>
                <li><a href="#">Pressure Cleaning</a></li>
                <li><a href="#">Pool Fencing</a></li>
                <li><a href="#">Privacy Screens</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">R</li>
                <li><a href="#">Rainwater Tanks</a></li>
                <li><a href="#">Render</a></li>
                <li><a href="#">Roller Shutters</a></li>
                <li><a href="#">Rubbish Removal</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">S</li>
                <li><a href="#">Scaffolding</a></li>
                <li><a href="#">Shopfitters</a></li>
                <li><a href="#">Skylights</a></li>
                <li><a href="#">Staircases</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Shower Repairs</a></li>
                <li><a href="#">Solar Power</a></li>
                <li><a href="#">Stonemasonry</a></li>
                <li><a href="#">Shades & Sails</a></li>
                <li><a href="#">Shower Screens</a></li>
                <li><a href="#">Splashbacks</a></li>
                <li><a href="#">Storage</a></li>
                <li><a href="#">Sheds</a></li>
                <li><a href="#">Skip & Truck Hire</a></li>
                <li><a href="#">Stained Glass</a></li>
                <li><a href="#">Surveyors</a></li>
              </ul><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">T</li>
                <li><a href="#">Timber Flooring</a></li>
                <li><a href="#">Town Planning </a></li>
                <li><a href="#">Tree Felling</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">U</li>
                <li><a href="#">Underfloor Heating</a></li>
                <li><a href="#">Underpinning</a></li>
                <li><a href="#">Upholstery Repair</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">V</li>
                <li><a href="#">Ventilation</a></li>
                <li><a href="#">Verandahs</a></li>
                <li><a href="#">Vinyl & Laminate</a></li>
              </ul><br>
            </div>
            <div class="col-md-3">
              <ul>
                <li class="dropdown-header">W</li>
                <li><a href="#">Wallpapering</a></li>
                <li><a href="#">Window Repairs</a></li>
                <li><a href="#">Wardrobes</a></li>
                <li><a href="#">Window Shutters</a></li>
                <li><a href="#">Waterproofing</a></li>
                <li><a href="#">Window Tinting</a></li>
                <li><a href="#">Window Cleaning</a></li>
                <li><a href="#">Windows</a></li>
              </ul><br>
            </div>
          </div>
        </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Contractors</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/features') }}">Features and Pricing</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/costguide') }}">Cost Guides</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/blog-posts') }}">Guest Blog</a>
          </li>
          @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}"><strong>Login </strong><i class="fa fa-sign-in" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('register') }}"><strong>Signup</strong></a>
              </li>
            
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('home') }}">
                          {{ __('Dashboard') }}
                      </a>
                      <a class="dropdown-item" href="{{ url('/myposts') }}">
                        {{ __('My Posts') }}
                     </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
        
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  
  <!--/ Nav End /-->
    <main id="forshow">
      @yield('content')
    </main>


<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/popper/popper.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>

</body>
</html>

