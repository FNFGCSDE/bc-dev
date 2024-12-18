<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="R8xBz7y6gWpO91hUam2kzXh6tvmEZegu4wCyE5da">

<title>Flyte Case Management</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="public/img/favicon.ico">
<style>

@import url('https://fonts.googleapis.com/css?family=Bangers|Cinzel:400,700,900|Lato:100,300,400,700,900|Lobster|Lora:400,700|Mansalva|Muli:200,300,400,600,700,800,900|Open+Sans:300,400,600,700,800|Oswald:200,300,400,500,600,700|Roboto:100,300,400,500,700,900&display=swap');
/* Used Google Fonts */
font-family: 'Roboto', sans-serif;
font-family: 'Mansalva', cursive;
font-family: 'Lato', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Oswald', sans-serif;
font-family: 'Lora', serif;
font-family: 'Muli', sans-serif;
font-family: 'Lobster', cursive;
font-family: 'Cinzel', serif;
font-family: 'Bangers', cursive;

.logo-container ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display:inline-block;
}
.logo-container ul li {
    width: 300px;
    height: 120px;
    background: #fff;
    border-radius: 10px;
    margin: 10px;
    float: left;
    padding:20px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
}
.logo-container ul li a{
  text-decoration:none !important;
  display: inline-block;
}
.logo-holder{
  text-align:center;
}
/* Logo-1 */
.logo-1 h3 {
    color: #Azure;
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    font-size: 50px;
    line-height:1.3;
}
.logo-1 p {
    font-size: 14px;
    letter-spacing: 8px;
    text-transform: uppercase;
    padding-left: 10px;
    color: #34495e;
    font-weight: 600;
}


@media only screen and (max-width:736px) {

  .logo-container ul {
      width: 100%;
      text-align: center;
  }
  .logo-container ul li {
      width: 290px;
      margin-left: auto;
      margin-right: auto;
      float: none !important;
  }

  .Logos{
    margin-top:20px;
  }
}

h1.Logos {
    font-weight: 400;
    font-family: 'Bangers', cursive;
    font-size: 40px;
    text-align: center;
    letter-spacing: 3px;
    text-shadow: 2px 2px 0px #2d303a, -2px -2px 0px #2d303a, -2px 2px 0px #2d303a, 2px -2px 0px #2d303a;
    color: #fff;
}
p.para {
    text-align: center;
    font-size: 16px;
    margin-bottom: 20px;
    letter-spacing: 30px;
    font-family: 'Lora', serif;
    padding-top: 5px;
    color: #333333;
}


</style>

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light border-bottom border-dark navbar-laravel">
          <div class="container">
            <img src="{{ asset('img/Flyte.png')}}" height=100 width=100>
            <div class="logo-holder logo-1">
              <a href="">
                <h3>Flyte</h3>
                <p>Case Management System</p>
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="public/landing">
                                    Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="public/features">
                                    Features
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="public/plans">
                                    Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="public/about">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                |
                              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login')}}">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route('register')}}">
                                    Sign Up
                                </a>
                            </li>
                    </ul>
                  </div>
              </div>
            </nav>

  <main class="py-4">

  <!-- Hero Section-->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
          <br />
          <h1>Flyte</h1>
          <p class="lead">Protect your company from financial crime, reduce regulatory compliance risk, and improve investigator efficiency with our <b>case management system</b>.</p>
          <p><a href="public/features" class="btn btn-primary shadow mr-2">Discover More</a></p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <br /><img src="public/img/main.png" alt="Flyte" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Numbers Section -->
  <section class="py-5">
    <div class="container">
      <h2>Benefits - By the Numbers!</h2>
      <p class="text-muted mb-4">Our case management solutions:</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow border-primary h-100 text-center read">
            <div class="card-body">
              <h1 class="card-title">67%</h1>
              <h3 class="card-subtitle">Improvement</h3>
            </div>
            <p class="text-muted">Comprehensive, thorough, and vast.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-primary h-100 text-center read">
            <div class="card-body">
              <h1 class="card-title">10,000+</h1>
              <h3 class="card-subtitle">Sources</h3>
            </div>
            <p class="text-muted">Global sources updated 24/7/365.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-primary h-100 text-center read">
            <div class="card-body">
              <h1 class="card-title">1,000,000,000+</h1>
              <h3 class="card-subtitle">Links</h3>
            </div>
            <p class="text-muted">Networked intelligence for full context.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="bg-light py-5">
    <div class="container">
      <h2>Features</h2>
      <p class="text-muted mb-5">Flyte is a case management solution satisfying your regulatory compliance needs.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/global.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Alert & Case Management</a></h5>
              <p class="text-muted card-text">Easy-to-use 100% solution for your staffing needs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/timely.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Team & Role Management</a></h5>
              <p class="text-muted card-text">Support your AML/Regulatory Compliance department of any size and complexity.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/compliance.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Automated F2R Reporting</a></h5>
              <p class="text-muted card-text">Seamlessly transition from investigations to reporting.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/advanced.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Advanced Reporting</a></h5>
              <p class="text-muted card-text">Highly customizable and tailored reporting specific for your organization's unique needs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/export.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Import/Export Data</a></h5>
              <p class="text-muted card-text">Export entity profiles for reference and as evidence.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/features"><img src="public/img/custom.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/features" class="text-dark">Integrations & Customs</a></h5>
              <p class="text-muted card-text">Tailor your HCM workflow with your own options.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio-->
  <section class="py-5">
    <div class="container">
      <h2>Use Cases</h2>
      <p class="lead text-muted mb-5">Flyte integrates easily into your existing processes.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="public/kycscreening"><img src="public/img/kyc.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="public/kycscreening" class="text-dark">AML Investigations</a></h5>
              <p class="text-muted card-text"></p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="#"><img src="public/img/diligence.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">KYC & Due Diligence</a></h5>
              <p class="text-muted card-text">Easy, effortless screening to Know Your Client better, fully sourced and vetted information for your due diligence requirements.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="#"><img src="public/img/sanctioned.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Sanctioned Entities</a></h5>
              <p class="text-muted card-text">Discover sanctioned, high-risk, and watchlisted entities.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="#"><img src="public/img/thirdparty.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Third-Party Screening</a></h5>
              <p class="text-muted card-text">Find out more about your counterparties and third-parties.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="#"><img src="public/img/PEP.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Politically Exposed Persons</a></h5>
              <p class="text-muted card-text">Identify PEPs and deemed PEPs quickly for regulatory requirements.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100">
            <a href="#"><img src="public/img/reputation.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Reputational Risk</a></h5>
              <p class="text-muted card-text">Find out who you're dealing with, before it's a problem.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <h5>Flyte</h5>
          <ul class="contact-info list-unstyled">
            <li><a href="mailto:admin@fortitudenorth.com" class="text-dark">Email: admin@fortitudenorth.com</a></li>
            <li><p class="text-dark">Address: Fortitude North, 1 King Street West, Suite 4800-331, Toronto, ON</p></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>Product</h5>
          <ul class="links list-unstyled">
            <li> <a href="public/kycscreening" class="text-muted">Case Management</a></li>
            <li> <a href="public/PEPs" class="text-muted">Teams</a></li>
            <li> <a href="public/duediligence" class="text-muted">Integrations</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>About Us</h5>
          <ul class="links list-unstyled">
            <li> <a href="about#contact" class="text-muted">Contact</a></li>
            <li> <a href="about#us" class="text-muted">About Us</a></li>
            <li> <a href="about#privacy" class="text-muted">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-center text-md-left">
          <p class="mb-md-0">&copy; 2024 Fortitude North. All rights reserved.</p>
        </div>
        <div class="col-md-5 text-center text-md-right">
          <p class="mb-0">Alea Iacta Est</p>
        </div>
      </div>
    </div>
  </div>
  </main>
</div>

    <!-- Scripts -->
<script src="public/js/app.js"></script>
<script src="public/js/d3.min.js"></script>
<script src="./renderer.js"></script>


</body>
</html>
