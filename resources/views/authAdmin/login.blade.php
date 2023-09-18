@extends('base')

@section('title' ,'login')

@section('content')

<div style="background-image: url('images/Maliimage.jpg'); background-size: 100%; width: 100%; height: 600px; ">

<div class="container col-lg-6">
    <h1 class="text-center">Login</h1>
    <div class="card">
      <div class="card-body">
      <form class="row g-3" action="{{ route('app_register') }}" method="GET">
          <div class="alert alert-warning" ></div>
          <div class="alert alert-success" ></div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
          </div>
          <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3 Route::currentRouteName() =='app_register') active "> Se connecter</button>
        </div>
      </form>
      </div>
    </div>
  </div>

</div>
@endsection

