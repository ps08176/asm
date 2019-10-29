@extends('master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Register</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
    <div class="container" style="text-align: center;" >
      
      <form action="{{route('register')}}"method="post" class="beta-form-checkout">
      <input type="hidden" name="_token" value="{{csrf_token()}}">  
        <div class="row ">
          <div class="col-sm-3"></div>
          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $err)
              {{$err}}
              @endforeach
            </div>
          @endif  
          @if(Session::has('ok'))
            <div class="alert alert success">{{Session::get('ok')}}</div>
          @endif
              <div class="col-sm-6">    
              <h4>Đăng kí</h4><br>
              <div class="form-block">
                <label for="email" >Email</label>
                <input type="email" name="email" required>
              </div>
              <div class="form-block">
                <label for="phone">Password</label>
                <input type="text" name="password" required >
              </div>
              <div class="form-block">
                <label for="phone">Re Password</label>
                <input type="text" name="re_password" required>
              </div>
              <div class="form-block">
                <label for="email" >Full Name</label>
                <input type="text" name="fullname" required>
              </div>
            
              <div class="form-block">
                <input type="submit" class="btn btn-primary"></button>
              </div>
              <div class="col-sm-3"></div>
        </div>
      </form>
        </div>
    </section>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
