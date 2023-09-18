@extends('base')

@section('title' ,'Home')
@section('content')
<div>
    <div style="background-image: url('images/tour.jpg'); background-size: 100%; width: 100%; height: 800px; ">
        <h1>MALI KURA</h1>
    <header >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getName() =='app_home' active @endif" aria-current="page" href="{{ route('app_home') }}">Home</a>
        </li>
    <ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <button class="nav-link btn @if(\Illuminate\Routing\Route::currentRouteName() =='app_login') active @endif" aria-current="page" onclick=window.location.href="{{ route('app_login') }}">admin</button>
  </li>
  <li class="nav-item">
    <button class="nav-link btn @if(Illuminate\Routing\Route::currentRouteName() =='app_super_administrateur') active @endif" aria-current="page" onclick=window.location.href="{{ route('app_super_administrateur') }}">super_admin</button>
  </li>
</ul>
      </ul>
    </div>
  </div>
</nav>
<header >

</div>
<body>
    <div class="three_box">
        <div class="container">
           <div class="row">
              <div class="col-md-3">
                 <div id="text_hover" class="const text_align_center">
                    <i><img src="images/voiture.jfif" alt="#"/></i>

                 </div>
              </div>
              <div class="col-md-3">
                 <div id="text_hover" class="const text_align_center">
                    <i><img src="images/vignette.png" alt="#"/></i>
                 </div>
              </div>
           </div>
           <div class="col-md-3">
                 <div id="text_hover" class="const text_align_center">
                    <i><img src="images/MOTO.jpg" alt="#"/></i>
                 </div>
              </div>
        </div>
     </div>
      <!-- about -->
 <div class="about">
    <div class="container-fluid">
       <div class="row d_flex">
          <div class="col-md-7">
             <div class="titlepage">
                <h2>À propos</h2>
                <span>
                  nous sommes ce qui vous rêvaient depuis longtemps. <br>
                  notre objective c'est le bien-être des citoyens</span>
             </div>
          </div>
       </div>
    </div>
 </div>

</body>




