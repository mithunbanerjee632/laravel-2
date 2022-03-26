@extends('layout.app')
@section('title','service')

@section('content')

<div class="container-fluid bg-dark ">
  <div class="row p-5">
    <div class="col-md-12 text-center">
      <h4 class="text-white">My Services</h4>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
   <div class="col-md-4 p-1">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-4 p-1">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-4 p-1">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5 mb-5">
     <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your Message</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
      </div>
      
      <button type="submit" class="btn btn-block btn-primary">Send</button>
    </form>
    </div>

    <div class="col-md-6 mt-5 mb-5">
      <h5>Address</h5>
      <p>Shekhertek 8,Mohammadpur, Adabor, Dhaka-1207</p>
      <p>01713574869 (Help-Line)</p>
      <p>mithunbanerjee632@gmail.com</p>
    </div>
  </div>
</div>




@endsection