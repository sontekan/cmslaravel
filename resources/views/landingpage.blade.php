<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Castoro&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/60f87798d6e7610a49ac60a3/1fb596c25';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sontekan</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/blog">Blog</a>
        <a class="nav-link" href="/dashboard">Admin</a>
        <a class="nav-item btn btn-primary tombol" href="{{ route('register') }}">Join Us</a>
      </div>
    </div>
  </div>
</div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">"Mulailah dengan menuliskan hal-hal yang kau ketahui. <br>Tulislah tentang pengalaman dan perasaanmu sendiri" <br> <span>J.K. Rowling</span></h1>
    </div>
      </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">

      <!-- Kotak Menu -->
      <div class="row justify-content-center">
        <div class="col-10 kotak-menu">
          <div class="row">
            <div class="col-lg"> 
              <img src="img/group.png" alt="group" class="float-left">
              <h4>Team</h4>
              <p>Lorem ipsum dolor sit.</p>
            </div>
              <div class="col-lg"> 
                <img src="img/books.png" alt="books" class="float-left">
                <h4>Book</h4>
                <p>Lorem ipsum dolor sit.</p>
              </div>
              <div class="col-lg"> 
                  <img src="img/benefit.png" alt="benefit" class="float-left">
                  <h4>Benefit</h4>
                  <p>Lorem ipsum dolor sit.</p>
                </div>
          </div>
        </div>
      </div>
      <!-- End Kotak Menu -->

      <!-- Blog -->
      <div class="row blog">
        <div class="col">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="683" height="390" src="https://www.youtube.com/embed/3ZoLtHcANXg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col">
          <h3>Mulai <span>Menulis</span><br>di<span>Blog</span></h3>
          <p>Tulislah pengalamanmu setiap hari dan anda akan di kenang selamanya</p>
          <a href="" class="btn btn-success tombol">Mulai Menulis</a>
        </div>
      </div>
      <!-- End Blog -->

      <!-- Slide -->
      <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="testimonial">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h5>" Dengan aplikasi sontekan saya mulai rajin menulis
                    Terima kasih sontekan "</h5>
              </div>
            </div>
          </section>
          <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
              <figure class="figure">
                <img src="img/img3.jpg" class="figure-img img-fluid rounded-circle" alt="img1">
                <figcaption class="figure-caption">
                  <h5>Raisa</h5>
                  <p>Penyanyi</p>
                </figcaption>
              </figure>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <section class="testimonial">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h5>" Mulailah menulis sejak sekarang, sontekan bisa menjadi wadah untuk kamu menulis</h5>
              </div>
            </div>
          </section>
          <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
              <figure class="figure">
                <img src="img/img2.jpeg" class="figure-img img-fluid rounded-circle" alt="img1">
                <figcaption class="figure-caption">
                  <h5>Andovi</h5>
                  <p>Youtuber</p>
                </figcaption>
              </figure>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="false"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- End Slide -->

      <!-- Footer -->
      <div class="row copyright">
        <div class="col">
          <p>Copyright &copy 2021 Sontekan</p>
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://github.com/sontekan"><i id="social-gp" class="fa fa-github-square fa-3x social"></i></a>
            <a href="mailto:mhdputra.ysf@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
          </div>
            
        
        
      <!-- End Footer -->

    </div>
    <!-- End Container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
