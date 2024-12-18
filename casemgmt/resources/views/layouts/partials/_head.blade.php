<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">


<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">


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


@yield('styles')
