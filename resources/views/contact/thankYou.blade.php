<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Contact Us</title>
</head>
<body>
      @guest
        @include('heads.outernavibar')

        @else
          @include('heads.navibar')
      @endguest
<body>

<!-- Main navigation -->
<header>
 
  <div class="view">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container px-md-3 px-sm-0">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
            <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Thaksalawa Education</h3>
            <hr class="hr-light my-4 w-75">
            <h2 class="subtext-header mt-2 mb-4">Thank You For Your Feedback!!</h2>
            <a href="/" class="btn btn-rounded btn-outline-white">
              <i class="fa fa-home"></i>Back to Home
            </a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
<main>
  <div class="container">
    <!--Grid row-->
    <div class="row py-5">
      <!--Grid column-->
      <div class="col-md-12 text-center">
        <p>We Help You to Find The Outstanding Teachers All Around The Sri Lanka. Stay Tuned With Us. </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
</main>
@include('heads.footer')
        </div>
        <script src="/js/jquery-3.3.1.min.js"></script>

    
</body>
</html>