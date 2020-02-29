<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/style.css')}}">
  </head>
  <body>
  	@include('layouts.nav')

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(assets/frontend/coffee/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread"></h1>PEMBUATAN BIJI KOPI</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Pembuatan</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(assets/frontend/coffee/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Coffee</span>
	          <h2 class="mb-4">Pembuatan Dari Biji Kopi</h2>
	        </div>
	        <div>
	  				<p>Lakukan fermentasi terhadap biji kopi yang telah dikupas. Terdapat dua cara, pertama dengan merendam biji kopi dalam air bersih. Kedua, menumpuk biji kopi basah dalam bak semen atau bak kayu, kemudian atasnya ditutup dengan karung goni yang harus selalu dibasahi.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(assets/frontend/coffee/images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Pembuatan</span>
	          <h2 class="mb-4">Proses pengolahan biji kopi (Basah)</h2>
	          {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;Sortasi buah kopi
                                Setelah buah kopi dipanen, segera lakukan sortasi. Pisahkan buah dari kotoran,buah cacat. Pisahkan pula buah yang berwarna.
                                 Pengupasan kulit buah

Kupas kulit buah kopi, disarankan dengan bantuan mesin pengupas. Terdapat dua jenis mesin pengupas, yang diputar manual dan bertenaga mesin. Selama pengupasan, alirkan air secara terus menerus kedalam mesin pengupas.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_1.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Sortasi buah Kopi <span class="position"></span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Fermentasi biji kopi HS

Lakukan fermentasi terhadap biji kopi yang telah dikupas. Terdapat dua cara, pertama dengan merendam biji kopi dalam air bersih. Kedua, menumpuk biji kopi basah dalam bak semen atau bak kayu, kemudian atasnya ditutup dengan karung goni yang harus selalu dibasahi.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_2.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo; Pengeringan biji kopi HS

Langkah selanjutnya biji kopi HS hasil fermentasi dikeringkan. Proses pengeringan bisa dengan dijemur atau dengan mesin pengering. Untuk penjemuran, tebarkan biji kopi HS di atas lantai jemur secara merata. Ketebalan biji kopi sebaiknya tidak lebih dari 4 cm. Balik biji kopi secara teratur terutama ketika masih dalam keadaan basah. &rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_3.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Pengupasan kulit tanduk

Setelah biji kopi HS mencapai kadar air 12%, kupas kulit tanduk yang menyelimuti biji. Pengupasan bisa ditumbuk atau dengan bantuan mesin pengupas (huller). Dianjurkan dengan mesin untuk mengurangi resiko kerusakan biji kopi. Hasil pengupasan pada tahap ini disebut biji kopi beras (green bean).&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_2.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony">
	            <blockquote>
	              <p>&ldquo;f. Sortasi akhir biji kopi

Setelah dihasilkan biji kopi beras, lakukan sortasi akhir. Tujuannya untuk memisahkan kotoran dan biji pecah. Selanjutnya, biji kopi dikemas dan disimpan sebelum didistribusikan.&rdquo;</p>
	            </blockquote>
	            <div class="author d-flex mt-4">
	              <div class="image mr-3 align-self-center">
	                <img src="images/person_3.jpg" alt="">
	              </div>
	              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Pembuatan</span>
	            <h2 class="mb-4">Coffee</h2>
	            {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> --}}
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">See</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(assets/frontend/coffee/images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(assets/frontend/coffee/images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(assets/frontend/coffee/images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(assets/frontend/coffee/images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(assets/frontend/coffee/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Coffee Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/frontend/coffee/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/frontend/coffee/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets/frontend/coffee/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/aos.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/frontend/coffee/js/google-map.js')}}"></script>
  <script src="{{asset('assets/frontend/coffee/js/main.js')}}"></script>

  </body>
</html>
