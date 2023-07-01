@include('layouts.header')
<body class="login-main-body">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
           <div class="row no-gutters">
              <div class="col-md-5 p-5 bg-white full-height">
                 @yield('content')
              </div>
              <div class="col-md-7">
                 <div class="login-main-right bg-white p-5 mt-5 mb-5">
                    <div class="owl-carousel owl-carousel-login">
                       <div class="item">
                          <div class="carousel-login-card text-center">
                             <img src="img/login.png" class="img-fluid" alt="LOGO">
                             <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                             <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="carousel-login-card text-center">
                             <img src="img/login.png" class="img-fluid" alt="LOGO">
                             <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                             <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="carousel-login-card text-center">
                             <img src="img/login.png" class="img-fluid" alt="LOGO">
                             <h5 class="mt-5 mb-3">Create GIFs</h5>
                             <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
