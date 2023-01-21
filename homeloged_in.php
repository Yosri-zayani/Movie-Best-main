<!DOCTYPE html>
<html lang="en">
  <head>
<?php

session_start();
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
    <title>MovieBest– Online Movies</title>
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
                <a href="Home.php" class="header__logo">
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
                    <a href="NewReleases.html" class="header__nav-link">New Releases</a>
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
                  
                  <!-- end dropdown -->
                </ul>
                <!-- end header nav -->

                <!-- header auth -->
                <div class="header__auth">
                 

                  <a  class="header__sign-in">
                    <i class="icon ion-ios-log-in"></i>
                    <span>User : <?php
                    
                    $query = "select name from the_user limit 1 "; 
                    $res= mysqli_query($conn,$query);
                    $user_name = mysqli_fetch_array($res); 

                    ; echo $user_name['name'];?></span>
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

    <!-- home -->
    <section class="home home--bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="home__title"><b>Latest</b> Movies</h1>

            <button class="home__nav home__nav--prev" type="button">
              <i class="icon ion-ios-arrow-round-back"></i>
            </button>
            <button class="home__nav home__nav--next" type="button">
              <i class="icon ion-ios-arrow-round-forward"></i>
            </button>
          </div>

          <div class="col-12">
            <div class="owl-carousel home__carousel">
              <div class="item">
                <!-- card -->
                <div class="card card--big">
                  <div class="card__cover">
                    <img src="Pics/shawshank.jpg" alt="" />
                    <a href="#" class="card__play">
                      <i class="icon ion-ios-play"></i>
                    </a>
                  </div>
                  <div class="card__content">
                    <h3 class="card__title">
                      <a href="#">The Shawshank Redemption</a>
                    </h3>
                    <span class="card__category">
                      <a href="#">Drama</a>
                      <a href="#">Crime</a>
                    </span>
                    <span class="card__rate"
                      ><i class="icon ion-ios-star"></i>8.4</span
                    >
                  </div>
                </div>
                <!-- end card -->
              </div>

              <div class="item">
                <!-- card -->
                <div class="card card--big">
                  <div class="card__cover">
                    <img src="Pics/Godfather.jpg" alt="" />
                    <a href="#" class="card__play">
                      <i class="icon ion-ios-play"></i>
                    </a>
                  </div>
                  <div class="card__content">
                    <h3 class="card__title"><a href="#">The Godfather</a></h3>
                    <span class="card__category">
                      <a href="#">Crime</a>
                    </span>
                    <span class="card__rate"
                      ><i class="icon ion-ios-star"></i>7.1</span
                    >
                  </div>
                </div>
                <!-- end card -->
              </div>

              <div class="item">
                <!-- card -->
                <div class="card card--big">
                  <div class="card__cover">
                    <img src="Pics/Pulp-Fiction1.png" alt="" />
                    <a href="#" class="card__play">
                      <i class="icon ion-ios-play"></i>
                    </a>
                  </div>
                  <div class="card__content">
                    <h3 class="card__title"><a href="#">Pulp Fiction</a></h3>
                    <span class="card__category">
                      <a href="#">Drama</a>
                      <a href="#">Drugs</a>
                    </span>
                    <span class="card__rate"
                      ><i class="icon ion-ios-star"></i>6.3</span
                    >
                  </div>
                </div>
                <!-- end card -->
              </div>

              <div class="item">
                <!-- card -->
                <div class="card card--big">
                  <div class="card__cover">
                    <img src="Pics/Darkknight.jpg" alt="" />
                    <a href="#" class="card__play">
                      <i class="icon ion-ios-play"></i>
                    </a>
                  </div>
                  <div class="card__content">
                    <h3 class="card__title"><a href="#">The Dark Knight</a></h3>
                    <span class="card__category">
                      <a href="#">Action</a>
                      <a href="#">Fantasy</a>
                    </span>
                    <span class="card__rate"
                      ><i class="icon ion-ios-star"></i>7.9</span
                    >
                  </div>
                </div>
                <!-- end card -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end home -->

 
     <!-- content -->
     <section class="content">
      <div class="content__head">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- content title -->
              <h2 class="content__title">Description</h2>
              <!-- end content title -->

              <!-- content tabs nav -->
              

            
          </div>
        </div>
      </div>

      <div class="container">
        <!-- content tabs -->
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="tab-1"
            role="tabpanel"
            aria-labelledby="1-tab"
          >
            <div class="row">
              <!-- card -->
              <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card--list">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="card__cover">
                        <img src="Pics/Darkknight.jpg" alt="" />
                        <a href="#" class="card__play">
                          <i class="icon ion-ios-play"></i>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-8">
                      <div class="card__content">
                        <h3 class="card__title">
                          <a href="#">The Dark Knight</a>
                        </h3>
                        <span class="card__category">
                          <a href="#">Action</a>
                          <a href="#">Fantasy</a>
                        </span>

                        <div class="card__wrap">
                          <span class="card__rate"
                            ><i class="icon ion-ios-star"></i>7.9</span
                          >

                          <ul class="card__list">
                            <li>HD</li>
                            <li>16+</li>
                          </ul>
                        </div>

                        <div class="card__description">
                          <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using
                            'Content here, content here', making it look like
                            readable English.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <!-- card -->
              <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card--list">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="card__cover">
                        <img src="Pics/Godfather.jpg" alt="" />
                        <a href="#" class="card__play">
                          <i class="icon ion-ios-play"></i>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-8">
                      <div class="card__content">
                        <h3 class="card__title"><a href="#"> The God Father</a></h3>
                        <span class="card__category">
                          <a href="#">Crime</a>
                        </span>

                        <div class="card__wrap">
                          <span class="card__rate"
                            ><i class="icon ion-ios-star"></i>7.1</span
                          >

                          <ul class="card__list">
                            <li>HD</li>
                            <li>16+</li>
                          </ul>
                        </div>

                        <div class="card__description">
                          <p>
                            This timeless crime drama film tells the story of the Corleone family, and their rise to power in the world of organized crime. The film follows the patriarch of the family, Vito Corleone, as he navigates the dangerous world of the mafia, making deals, and seeking vengeance. Rated R for violence and language, "The Godfather" is a cinematic masterpiece and a must-see for fans of the crime genre.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <!-- card -->
              <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card--list">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="card__cover">
                        <img src="Pics/Pulp-Fiction1.png" alt="" />
                        <a href="#" class="card__play">
                          <i class="icon ion-ios-play"></i>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-8">
                      <div class="card__content">
                        <h3 class="card__title"><a href="#">Pulp Fiction</a></h3>
                        <span class="card__category">
                          <a href="#">Drugs</a>
                          <a href="#">Drama</a>
                        </span>

                        <div class="card__wrap">
                          <span class="card__rate"
                            ><i class="icon ion-ios-star"></i>6.3</span
                          >

                          <ul class="card__list">
                            <li>HD</li>
                            <li>16+</li>
                          </ul>
                        </div>

                        <div class="card__description">
                          <p>
                            This cult classic film tells
                             the story of several interconnected characters in the criminal underworld of Los Angeles. With a non-linear narrative and a star-studded cast, "Pulp Fiction" is a cinematic triumph that explores themes of crime, violence, and redemption.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <!-- card -->
              <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card--list">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="card__cover">
                        <img src="Pics/shawshank.jpg" alt="" />
                        <a href="#" class="card__play">
                          <i class="icon ion-ios-play"></i>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-8">
                      <div class="card__content">
                        <h3 class="card__title">
                          <a href="#">the Shawshank Redemption</a>
                        </h3>
                        <span class="card__category">
                          <a href="#">Crime</a>
                          <a href="#">Drama</a>
                        </span>

                        <div class="card__wrap">
                          <span class="card__rate"
                            ><i class="icon ion-ios-star"></i>7.9</span
                          >

                          <ul class="card__list">
                            <li>HD</li>
                            <li>16+</li>
                          </ul>
                        </div>

                        <div class="card__description">
                          <p>
                            This classic drama film tells the story of Andy Dufresne, a man who is wrongly convicted of murder and sent to a notorious prison, where he forms an unlikely friendship with a fellow inmate, Red. Over the years, Andy uses his intelligence and cunning to make the best of his situation, while Red becomes his confidante and closest friend. 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end card -->

         

              
            </div>
          </div>
        </div>
        <!-- end content tabs -->
      </div>
    </section>
    <!-- end content -->

    

  

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
