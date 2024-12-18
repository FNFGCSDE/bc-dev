<!-- <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
ul li a {
  display: block;
  width: 100%;
  text-decoration: none;
  padding: 5px;
}
ul li a:hover {
}

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
<nav class="navbar navbar-expand-md" style="background-image: linear-gradient(LightSlateGrey, LightSteelBlue);">
<div class="d-flex flex-column flex-shrink-0 bg-light p-2 rounded" style="background-image: linear-gradient(LightSteelBlue, LightSlateGrey); width: 92%;">
    <a href="/saturnus/index.html" class="d-flex align-items-center rounded p-1 m-1">
      <img src="{{ asset('img/saturnus.png') }}" alt="Saturnus" class="rounded" style="width: 85%;">
      <div class="logo-holder logo-1">
        <h3>Saturnus</h3>
        <p>Personnel Systems</p>
      </div>
    </a>
    @auth
    <ul class="flex-column mb-auto list-group list-group-flush rounded">
      <li class="list-group-item d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="{{ route('home')}}" class="nav-link {{ return_if(on_page('home'), ' active') }} text-dark" aria-current="page">
          Home
        </a>
      </li>
      @if(auth()->user()->role == "admin")
      <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="{{ route('user_admin.invoices')}}" class="nav-link {{ return_if(on_page('user_admin.invoices'), ' active') }} text-dark">
          Invoices
        </a>
        <?php
          //$cnt1 = DB::table('invoices')->where('status',"=","Open")->orWhere('status','=','Review')->count();
          //if ($cnt1 > 0) echo "<span class='badge badge-primary badge-pill'>".$cnt1."</span>";
        ?>
      </li>
      <li class="list-group-item list-group-item-danger d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="{{}}" class="nav-link link-dark text-dark">
          Approvals
        </a>
        <?php
          //$cnt2 = DB::table('invoices')->where('status',"=","Approved")->count();
          //if ($cnt2 > 0) echo "<span class='badge badge-primary badge-pill'>".$cnt2."</span>";
        ?>
      </li>
      <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="{{ route('user_admin.personnel')}}" class="nav-link {{ return_if(on_page('user_admin.personnel'), ' active') }} text-dark">
          Personnel
        </a>
        <span class="badge badge-primary badge-pill"></span>
      </li>
      <li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="#" class="nav-link text-dark">
          Reports
        </a>
        <span class="badge badge-primary badge-pill"></span>
      </li>
      <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="#" class="nav-link text-dark">
          Programs
        </a>
      </li>
      @endif
      @if(auth()->user()->role == "worker")
      <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center rounded p-1 m-1">
        <a href="{{ route('user_worker.invoices')}}" class="nav-link text-dark">
          Invoices
        </a>
      </li>
      @endif
      <li class="list-group-item list-group-item-dark rounded p-1 m-1">
        <a href="{{ route('logout' )}}" class="nav-link text-dark">
          Logout
        </a>
      </li>
    </ul>
    @endauth
    <hr>

  </div>
</nav>
-->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- SUPERADMIN SIDEBAR -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Work Items
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Cases</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Alerts</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>QA</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        System
    </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Programs</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Update Passwords (DNI)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Settings</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
