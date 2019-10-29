@extends('master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Login</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
    <div class="container" >
      <form action="#"method="post" class="beta-form-checkout">
        <div class="row ">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
              <h4>Đăng nhập</h4><br>
              <div class="form-block">
                <label for="email" style="margin-right: 27px;">Email</label>
                <input type="email" name="email" required>
              </div>
              <div class="form-block">
                <label for="phone">Password</label>
                <input type="text" name="phone" required>
              </div>
              <div class="form-block">
                <input type="submit" class="btn btn-primary"></button>
              </div>
              <div class="col-sm-3"></div>
          </form>
        </div>

          <!-- <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
        <div class="row d-flex mt-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div> -->
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