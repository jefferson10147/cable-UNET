@extends('layouts.app')

@section('content')

<header class="masthead text-center my-5">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ asset('static/logo-unet.png')}}" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0 display-4">CABLE UNET</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Internet - Telephony - TV</p>
    </div>
</header>

<!-- Footer -->
<footer class="bg-dark text-center text-white pt-5">
    <!-- Grid container -->
    <div class="container p-3">
      <!-- Section: Social media -->
      <section class="mb-4">

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/jefferson10147/cable-UNET" role="button"
          ><i class="fab fa-github"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="mailto:jefferson.montilla98@gmail.com" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/jefferson-steven-montilla-mendoza-3417821b8/" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        </section>
        <!-- Section: Social media -->

       
      <!-- Section: Text -->
      <section class="mb-5">
        <p>
            Made with Laravel, MySQL, Blade template and Bootstrap.
        </p>
      </section>
      <!-- Section: Text -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright: Jefferson S. Montilla Mendoza
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>

@endsection
