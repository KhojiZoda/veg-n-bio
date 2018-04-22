<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
      {!! Html::style('fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
      {!! Html::style('fonts/themify/themify-icons.css') !!}
      {!! Html::style('vendor/animate/animate.css') !!}
      {!! Html::style('vendor/css-hamburgers/hamburgers.min.css') !!}
      {!! Html::style('vendor/animsition/css/animsition.min.css') !!}
      {!! Html::style('vendor/select2/select2.min.css') !!}
      {!! Html::style('vendor/daterangepicker/daterangepicker.css') !!}
      {!! Html::style('vendor/slick/slick.css') !!}
      {!! Html::style('vendor/lightbox2/css/lightbox.min.css') !!}
      {!! Html::style('css/util.css') !!}
      {!! Html::style('css/main.css') !!}
  </head>
  <body class="animsition">

  	@include("front.header")

    @include("front.sidebar")

    @include("front.home")

    @include("front.welcome")

    @include("front.intro")

    @include("front.menu")

    @include("front.event")

    @include("front.booking")

    @include("front.blog")

  	<!-- Sign up -->
  	<div class="section-signup bg1-pattern p-t-85 p-b-85">
  		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
  			<span class="txt5 m-10">
  				Specials Sign up
  			</span>

  			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
  				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
  				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
  			</div>

  			<!-- Button3 -->
  			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
  				Sign-up
  			</button>
  		</form>
  	</div>


  	<!-- Footer -->
  	<footer class="bg1">
  		<div class="container p-t-40 p-b-70">
  			<div class="row">
  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="txt13 m-b-33">
  						Contact Us
  					</h4>

  					<ul class="m-b-70">
  						<li class="txt14 m-b-14">
  							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
  							8th floor, 379 Hudson St, New York, NY 10018
  						</li>

  						<li class="txt14 m-b-14">
  							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
  							(+1) 96 716 6879
  						</li>

  						<li class="txt14 m-b-14">
  							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
  							contact@site.com
  						</li>
  					</ul>

  					<!-- - -->
  					<h4 class="txt13 m-b-32">
  						Opening Times
  					</h4>

  					<ul>
  						<li class="txt14">
  							09:30 AM – 11:00 PM
  						</li>

  						<li class="txt14">
  							Every Day
  						</li>
  					</ul>
  				</div>

  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="txt13 m-b-33">
  						Latest twitter
  					</h4>

  					<div class="m-b-25">
  						<span class="fs-13 color2 m-r-5">
  							<i class="fa fa-twitter" aria-hidden="true"></i>
  						</span>
  						<a href="#" class="txt15">
  							@colorlib
  						</a>

  						<p class="txt14 m-b-18">
  							Activello is a good option. It has a slider built into that displays the featured image in the slider.
  							<a href="#" class="txt15">
  								https://buff.ly/2zaSfAQ
  							</a>
  						</p>

  						<span class="txt16">
  							21 Dec 2017
  						</span>
  					</div>

  					<div>
  						<span class="fs-13 color2 m-r-5">
  							<i class="fa fa-twitter" aria-hidden="true"></i>
  						</span>
  						<a href="#" class="txt15">
  							@colorlib
  						</a>

  						<p class="txt14 m-b-18">
  							Activello is a good option. It has a slider built into that displays
  							<a href="#" class="txt15">
  								https://buff.ly/2zaSfAQ
  							</a>
  						</p>

  						<span class="txt16">
  							21 Dec 2017
  						</span>
  					</div>
  				</div>

  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="txt13 m-b-38">
  						Gallery
  					</h4>

  					<!-- Gallery footer -->
  					<div class="wrap-gallery-footer flex-w">
  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-01.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-02.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-03.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-04.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-05.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-06.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-07.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-08.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-09.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-10.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-11.jpg', 'GALLERY') }}
  						</a>

  						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
                {{ HTML::image('images/photo-gallery-thumb-12.jpg', 'GALLERY') }}
  						</a>
  					</div>

  				</div>
  			</div>
  		</div>

  		<div class="end-footer bg2">
  			<div class="container">
  				<div class="flex-sb-m flex-w p-t-22 p-b-22">
  					<div class="p-t-5 p-b-5">
  						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
  						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
  						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
  					</div>

  					<div class="txt17 p-r-20 p-t-5 p-b-5">
  						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</footer>


  	<!-- Back to top -->
  	<div class="btn-back-to-top bg0-hov" id="myBtn">
  		<span class="symbol-btn-back-to-top">
  			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
  		</span>
  	</div>

  	<!-- Container Selection1 -->
  	<div id="dropDownSelect1"></div>



    {!! Html::script('vendor/jquery/jquery-3.2.1.min.js') !!}
    {!! Html::script('vendor/animsition/js/animsition.min.js') !!}
    {!! Html::script('vendor/bootstrap/js/popper.js') !!}
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('vendor/select2/select2.min.js') !!}
    {!! Html::script('vendor/daterangepicker/moment.min.js') !!}
    {!! Html::script('vendor/daterangepicker/daterangepicker.js') !!}
    {!! Html::script('vendor/slick/slick.min.js') !!}
    {!! Html::script('js/slick-custom.js') !!}
    {!! Html::script('vendor/parallax100/parallax100.js') !!}
  	<script type="text/javascript">
          $('.parallax100').parallax100();
  	</script>
    {!! Html::script('vendor/countdowntime/countdowntime.js') !!}
    {!! Html::script('vendor/lightbox2/js/lightbox.min.js') !!}
    {!! Html::script('js/main.js') !!}
  </body>
</html>
