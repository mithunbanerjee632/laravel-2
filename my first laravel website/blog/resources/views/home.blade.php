@extends('layout.app')
@section('title','home')

@section('content')
<div class="container-fluid parallax mb-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-4 text-center topDiv">
      <h1 class="text-white">Software Engineer</h1>
      <h3 class="text-white">Mobile & Web</h3>
      <button class="btn btn-danger">Learn More</button>
    </div>
  </div>
</div>

<div class="container text-center mb-5 mt-5">
  <h1>My Services</h1><br><br>
  <div class="row">
  <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-danger">Learn More</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-danger">Learn More</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-danger">Learn More</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container text-center mb-5 mt-5">
  <h1>Recent Project</h1><br><br>
  <div class="row">
  <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-4 p-2">
    <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container text-center mb-5 mt-5">
<h1>Contact With Me</h1><br><br>
  <div class="row">
    <div class="col-md-6">
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
        
        <button type="submit" class="btn btn-block btn-info">Send</button>
      </form>
    </div>

    <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.254755723758!2d90.43308021476615!3d23.702594896518193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c61a367f87%3A0x3b625b7c4f1bce76!2sDholairpar%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1646767870408!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

</div>








@endsection