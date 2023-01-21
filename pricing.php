<!DOCTYPE html>
<html lang="en">

  <head>
  <?php

include("connection.php");
include("functions.php");
$user_data = check_login($conn);
  ?>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/plyr.css" />
    <link rel="stylesheet" href="css/photoswipe.css" />
    <link rel="stylesheet" href="css/default-skin.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- Favicons -->
    <link
      rel="icon"
      type="image/png"
      href="icon/favicon-32x32.png"
      sizes="32x32"
    />
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="icon/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="icon/apple-touch-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="icon/apple-touch-icon-144x144.png"
    />

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dmitry Volkov" />
    <title>MovieBest – Online Movies, TV Shows & Cinema HTML Template</title>
  </head>
  <body class="body">
    <!-- header -->
    <header class="header">
      <div class="header__wrap">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="header__content">
                <!-- header logo -->
                <a href="Home.php"class="header__logo">
                  <h3>MovieBest</h3>
                </a>
                <!-- end header logo -->

                <!-- header nav -->
                <ul class="header__nav">
                  <!-- dropdown -->
                  <li class="header__nav-item">
                    <a href="Home.php" class="header__nav-link">Home</a>
                  </li>
                  <!-- end dropdown -->

                  <!-- dropdown -->
                  <li class="header__nav-item">
                    <a href="NewReleases.html" class="header__nav-link"
                      >New Releases</a
                    >
                  </li>
                  <!-- end dropdown -->

                  <li class="header__nav-item">
                    <a href="pricing.html" class="header__nav-link"
                      >Pricing Plan</a
                    >
                  </li>

                  <li class="header__nav-item">
                    <a href="faq.html" class="header__nav-link">Help</a>
                  </li>

                  <!-- dropdown -->
                  <li class="dropdown header__nav-item">
                    
                  </li>
                  <!-- end dropdown -->
                </ul>
                <!-- end header nav -->

                <!-- header auth -->
                <div class="header__auth">
                  <a href="signin.php" class="header__sign-in">
                    <i class="icon ion-ios-log-in"></i>
                    <span>sign in</span>
                  </a>
                </div>
                <!-- end header auth -->

                <!-- header menu btn -->
                <button class="header__btn" type="button">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
                <!-- end header menu btn -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- header search -->

      <!-- end header search -->
    </header>
    <!-- end header -->

    <!-- page title -->
    <section
      class="section section--first section--bg"
      data-bg="img/section/section.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section__wrap">
              <!-- section title -->
              <h2 class="section__title">Pricing</h2>
              <!-- end section title -->

              <!-- breadcrumb -->
              <ul class="breadcrumb">
                <li class="breadcrumb__item"><a href="Home.php">Home</a></li>
                <li class="breadcrumb__item breadcrumb__item--active">
                  Pricing
                </li>
              </ul>
              <!-- end breadcrumb -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end page title -->

    <!-- pricing -->
    <div class="section">
      <div class="container">
        <div class="row">
          <!-- plan features -->
          <div class="col-12">
            <ul class="row plan-features">
              <li class="col-12 col-md-6 col-lg-4">
                1 month unlimited access!
              </li>
              <li class="col-12 col-md-6 col-lg-4">
                Stream on your phone, laptop, tablet or TV.
              </li>
              <li class="col-12 col-md-6 col-lg-4">
                1 month unlimited access!
              </li>
              <li class="col-12 col-md-6 col-lg-4">
                Thousands of TV shows, movies & more.
              </li>
              <li class="col-12 col-md-6 col-lg-4">
                You can even Download & watch offline.
              </li>
              <li class="col-12 col-md-6 col-lg-4">
                Thousands of TV shows, movies & more.
              </li>
            </ul>
          </div>
          <!-- end plan features -->

          <!-- price -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="price">
              <div class="price__item price__item--first">
                <span>Basic</span> <span>Free</span>
              </div>
              <div class="price__item"><span>7 days</span></div>
              <div class="price__item"><span>720p Resolution</span></div>
              <div class="price__item"><span>Limited Availability</span></div>
              <div class="price__item"><span>Desktop Only</span></div>
              <div class="price__item"><span>Limited Support</span></div>
              <a href="#" class="price__btn">Choose Plan</a>
            </div>
          </div>
          <!-- end price -->

          <!-- price -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="price price--premium">
              <div class="price__item price__item--first">
                <span>Premium</span> <span>19.99dt</span>
              </div>
              <div class="price__item"><span>1 Month</span></div>
              <div class="price__item"><span>Full HD</span></div>
              <div class="price__item"><span>Lifetime Availability</span></div>
              <div class="price__item"><span>TV & Desktop</span></div>
              <div class="price__item"><span>24/7 Support</span></div>
              <a href="#" class="price__btn">Choose Plan</a>
            </div>
          </div>
          <!-- end price -->

          <!-- price -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="price">
              <div class="price__item price__item--first">
                <span>Cinematic</span> <span>39.99dt</span>
              </div>
              <div class="price__item"><span>2 Months</span></div>
              <div class="price__item"><span>Ultra HD</span></div>
              <div class="price__item"><span>Lifetime Availability</span></div>
              <div class="price__item"><span>Any Device</span></div>
              <div class="price__item"><span>24/7 Support</span></div>
              <a href="#" class="price__btn">Choose Plan</a>
            </div>
          </div>
          <!-- end price -->
        </div>
      </div>
    </div>
    <!-- end pricing -->

    <!-- features -->
    <section class="section section--dark">
      <div class="container">
        <div class="row">
          <!-- section title -->
          <div class="col-12">
            <h2 class="section__title section__title--no-margin">
              Our Features
            </h2>
          </div>
          <!-- end section title -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-tv feature__icon"></i>
              <h3 class="feature__title">Ultra HD</h3>
              
            </div>
          </div>
          <!-- end feature -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-film feature__icon"></i>
              <h3 class="feature__title">All Genres</h3>
              
            </div>
          </div>
          <!-- end feature -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-trophy feature__icon"></i>
              <h3 class="feature__title">Multiple Awards</h3>
              
            </div>
          </div>
          <!-- end feature -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-notifications feature__icon"></i>
              <h3 class="feature__title">Notifications</h3>
              
            </div>
          </div>
          <!-- end feature -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-rocket feature__icon"></i>
              <h3 class="feature__title">Fast Loading</h3>
              
            </div>
          </div>
          <!-- end feature -->

          <!-- feature -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="feature">
              <i class="icon ion-ios-globe feature__icon"></i>
              <h3 class="feature__title">Multi Language Subtitles</h3>
             
            </div>
          </div>
          <!-- end feature -->
        </div>
      </div>
    </section>
    <!-- end features -->

   

    <!-- footer -->
    <footer class="footer">
		<div class="container">
		 
			<div class="col-12">
				
				<ul class="Credits">
				  <li><div>Made by</div></li>
  
				  <li><div>Nidhal Jegham</div></li>
				  <li><div>Yosri Zayani</div></li>
				  <li><div>Yesmine Chalgham</div></li>
				</ul>
			  </div>
		  </div>
		</div>
	  </footer>
    <!-- end footer -->

    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/wNumb.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/plyr.min.js"></script>
    <script src="js/jquery.morelines.min.js"></script>
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
