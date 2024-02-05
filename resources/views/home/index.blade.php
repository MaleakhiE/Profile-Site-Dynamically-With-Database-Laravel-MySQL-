<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/company_profile/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/company_profile/css/bootstrap.min.css">
  <link rel="stylesheet" href="/company_profile/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/company_profile/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/company_profile/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/company_profile/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/company_profile/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/company_profile/css/aos.css">
  <link rel="stylesheet" href="/company_profile/css/style.css">

  <title>Portofolio - MaleakhiE</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

  <div class="lines-wrap">
    <div class="lines-inner">
      <div class="lines"></div>
    </div>
  </div>
  <!-- END lines -->

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  
  <nav class="site-nav dark mb-5 site-navbar-target">
    <div class="container">
      <div class="site-navigation">
        <a href="/" class="logo m-0">-Porto. folio<span class="text-primary">-</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-none site-menu float-right site-nav-wrap">
          <li><a href="#home-section" class="nav-link">Home</a></li>
          <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
          <li><a href="#about-section" class="nav-link">About</a></li>
          <li><a href="#services-section" class="nav-link">Services</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-inline-block" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>

  <div class="untree_co-section pb-0" id="home-section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <h1 class="heading gsap-reveal-hero mb-3"><strong>Hello<span class="text-primary">.</span></strong></h1>
          <h2 class="subheading gsap-reveal-hero mb-4">
            <strong>I'm Eki, check this out !</strong>
          </h2>
          <p class="gsap-reveal-hero"><a href="/company_profile/doc/test.pdf" target="_blank" class="btn btn-outline-black">Curriculum vitae</a></p>    
        </div>
      </div>
    </div>
  </div>
  <div class="untree_co-section untree_co-section-4 pb-0"  id="portfolio-section">
    <div class="container">
      <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
      <div id="portfolio-single-holder"></div>
      <div class="portfolio-wrapper">
        <div id="posts" class="row">
          @foreach ($portofolios as $index => $portofolio)
          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2 {{$index === 0 ? 'active' : ''}}">
            <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>{{$portofolio->name}}</h3>
                  <p>{{$portofolio->description}}</p>
                </div>
              </div>
              <img src="/images/fotoporto/{{$portofolio->image}}" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>
          @endforeach
        </div>
      </div>
        <!-- </div>
        </div> -->
      </div>
    </div>


    <div class="untree_co-section pb-0" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-lg-7 mx-auto text-center author-wrap">
            <img src="/images/fotoabout/{{$about->image}}" alt="Image" class="img-fluid rounded-circle mb-3">
            <h3 class="text-black h5 font-weight-bold mb-2 gsap-reveal-hero">{{$about->title}}</h3>
            <p class="gsap-reveal-hero">{{$about->job}}</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <p class="gsap-reveal-hero text-justify">{{$about->description}}</p>
            <p class="gsap-reveal-hero text-justify">{{$about->description2}}</p>
            <p class="gsap-reveal-hero text-justify">{{$about->description3}}</p>
          </div>
        </div>
      </div>
    </div>


    <div class="untree_co-section pb-0" id="services-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading gsap-reveal-hero mb-0"><strong>{{$menu->judul}}</strong></h2>
            <p class="gsap-reveal-hero">{{$menu->description}}</p>
            <div class="wave gsap-reveal-hero" >
              <svg>
                <path d="M10,10 L50,100 L90,50" stroke="#0389ff"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="row">
          @foreach ($service as $index => $services)
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" {{$index === 0 ? 'active' : ''}}>
            <div class="service text-center">
              <div class="gsap-reveal-hero mb-3">
                <span class="icon-service"><img src="/images/fotoservice/{{$services->image}}" alt="Image" class="img-fluid"></span>
              </div>
              <h3 class="gsap-reveal-hero">{{$services->name}}</h3>
              <p class="gsap-reveal-hero">{{$services->description}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="untree_co-section pb-0">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading gsap-reveal-hero mb-0"><strong>{{$menu2->judul}}</strong></h2>
            <p class="gsap-reveal-hero">{{$menu2->description}}</p>
            <div class="wave gsap-reveal-hero" >
              <svg>
                <path d="M10,10 L50,100 L90,50" stroke="#0389ff"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($skill as $index => $skills)
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="0">
            <div class="progressbar" data-animate="false">
              <div class="circle" data-percent={{$skills->rasio}}>
                <div class="number"></div>
                <p class="caption">{{$skills->name}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  

              **==========
            -->
            <p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Maleakhi E  
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="/company_profile/js/jquery-3.4.1.min.js"></script>
    <script src="/company_profile/js/popper.min.js"></script>
    <script src="/company_profile/js/bootstrap.min.js"></script>
    <script src="/company_profile/js/owl.carousel.min.js"></script>
    <script src="/company_profile/js/jquery.animateNumber.min.js"></script>
    <script src="/company_profile/js/jquery.waypoints.min.js"></script>
    <script src="/company_profile/js/jquery.fancybox.min.js"></script>
    <script src="/company_profile/js/aos.js"></script>
    <script src="/company_profile/js/wave-animate.js"></script>
    <script src="/company_profile/js/circle-progress.js"></script>
    <script src="/company_profile/js/imagesloaded.pkgd.js"></script>
    <script src="/company_profile/js/isotope.pkgd.min.js"></script>
    <script src="/company_profile/js/jquery.easing.1.3.js"></script>
    <script src="/company_profile/js/TweenMax.min.js"></script>
    <script src="/company_profile/js/ScrollMagic.min.js"></script>
    <script src="/company_profile/js/scrollmagic.animation.gsap.min.js"></script>


    <script src="/company_profile/js/custom.js"></script>
    
  </body>

  </html>
