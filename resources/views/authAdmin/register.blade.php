@extends('base')

@section('title' ,'register')

@section('content')
<div>
<div style="background-image: url('images/login.jpg'); background-size: 100%; width: 100%; height: 600px; ">

<div class="container col-lg-6">
    <h1 class="text-center">Register</h1>
    <div class="card">
        <form class="form-group">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" >
            <label for="floatingInput">Nom</label>
            </div>
         <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenomm" >
            <label for="floatingInput">Prenom</label>
            </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="adresse" >
            <label for="floatingInput">Adreesse</label>
            </div>
            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
      </form>
      <button  class="btn btn-success">Login</button>
      </div>
    </div>
  </div>

</div>

@endsection
