<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="icon" href="images/title-img.png"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainpage.css">

    <title>Voyage Escort</title>
  </head>
  <body>

    <!-- header -->

      <!-- navbar -->

      <nav class="navbar navbar-expand-lg fixed-top nav-menu">
        <a href="#" class="navbar-brand text-light text-uppercase"><span class="h2 font-weight-bold">Voyage Escort</span></a>
        <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
          <div class="bg-light line1"></div>
          <div class="bg-light line2"></div>
          <div class="bg-light line3"></div>
        </button>

        <div class="collapse navbar-collapse justify-content text-uppercase font-weight-bold" id="myNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="#" class="nav-link m-2 menu-item nav-active">Home</a>
            </li>
            <li class="nav-item">
              <a href="package.php" class="nav-link m-2 menu-item">Packages</a>
            </li>
            </ul>

            <?php session_start();
           if(!isset($_SESSION["signedin"])){?>
              <form action="signin.html">
            <button type ="submit" class="btn m-2  btn-outline-light btn-default btn-block " >Sign in</button>
          
          </form>
          <form action="signup.html">
            <button type ="submit" class="btn m-2  btn-outline-light btn-default btn-block " >Sign up</button>
          </form>
           <?php } else{?>
            <form action="logout.php">
            <button type ="submit" class="btn m-2  btn-outline-light btn-default btn-block " >Log out</button>
          
            </form>
            <?php } ?>

        </div>
      </nav>

      <!-- end of navbar -->

      <!-- banner -->

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>

           </ol>

       <div class="carousel-inner">

            <div class="carousel-item active">
             <img src="0839b83666de8dd4c24d855bdbb34fd9.jpg" class="d-block w-100" id="p1">
            
            </div>

            <div class="carousel-item">
              <img src="http://cdn.desktopwallpapers4.me/wallpapers/beaches/1920x1080/1/5085-relaxation-in-the-maldives-1920x1080-beach-wallpaper.jpg" class="d-block w-100" id="p2">
              
            </div>

            <div class="carousel-item">
              <img src="http://www.opiso.org/wp-content/uploads/2017/01/Light-Opiso-Picture.jpg" class="d-block w-100" id="p3">
              
            </div>

            <div class="carousel-item" style="height:700px">
            <img src="https://wallpaperaccess.com/full/473628.jpg" class="d-block w-100" id="p4">
            
            </div>

              <form action="package.php">
            <button type="submit" class="btn btn-outline-light btn-lg bcarousel">LET'S START!!</button>
            </form>

        </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
                    
      </div>


      <!-- end of banner  -->

    <!-- end of header -->

    <!-- mission -->

    <section class="p-5 mission">
      <div class="container-fluid">
        <!-- title -->
        <div class="row text-white text-center" id="mission1">
          <div class="col m-4">
            <h1 class="display-4 mb-4">Our Mission</h1>
            <div class="underline mb-4"></div>
            <p class="lead">Provide our clients with the best service in order to simplify their travel plans</p>
          </div>
        </div>
        <!-- end of title -->
        <div class="row my-5">
          <div class="col-md-4 text-center">
            <i class="fas fa-cogs fa-5x text-danger mb-4"></i>
            <h1 class="text-white mb-3">Creativity</h1>
          </div>
          <div class="col-md-4 text-center">
            <i class="far fa-thumbs-up fa-5x text-danger mb-4"></i>
            <h1 class="text-white mb-3">Quality</h1>

          </div>
          <div class="col-md-4 text-center">
            <i class="far fa-handshake fa-5x text-danger mb-4"></i>
            <h1 class="text-white mb-3">Experience</h1>

          </div>
        </div>
      </div>

      <div class="container ">
        <div class="row align-items-center">

          <div class="col-lg-5 text-center">
            <img src="https://images.unsplash.com/photo-1560930375-f0f48057f535?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" width="450" class="img-fluid camera-img">
          </div>

          <div class="col-lg-7 text-lg-right text-center mission-text text-white">
            <h1>We Know What We Do</h1>
            <p class="lead"></p>
          </div>

        </div>
      </div>
    </section>

    <!-- end of mission -->

    <!-- customers -->

    <section class="p-5 customers" id="customers1">
      <div class="container-fluid">
        <div class="row text-white text-center">
          <div class="col m-4">
            <h1 class="display-4 mb-4">Happy Customers<h1>
            <div class="underline mb-4"></div>
            <p class="lead">Customers' comments</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="carousel slide" data-ride="carousel" id="customer-carousel">
              <ol class="carousel-indicators">
                <li data-target="#customer-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#customer-carousel" data-slide-to="1"></li>
                <li data-target="#customer-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active text-center">
                  <img src="images/customer1.jpeg" class="img-fluid rounded-circle m-5" width="150">
                  <blockquote class="blockquote text-white">
                    <p class="mb-5">What a beautiful experience, i didn't even have to search and plan anything, they did that for me.</p>
                  </blockquote>
                  <h5 class="text-light text-uppercase font-weight-bold mb-3">Monica</h5>
                  <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                  </ul>
                </div>
                <div class="carousel-item text-center">
                  <img src="images/customer2.jpeg" class="img-fluid rounded-circle m-5" width="150">
                  <blockquote class="blockquote text-white">
                    <p class="mb-5">I booked my ticket 3 days before the trip, it was a sudden flight. Even with this last minute program, voyage escort planned the trip, providing me with the perfect hotel and best car to rent without even having to trouble researching all the required details.</p>
                  </blockquote>
                  <h5 class="text-light text-uppercase font-weight-bold mb-3">Johnathan</h5>
                  <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                  </ul>
                </div>
                <div class="carousel-item text-center">
                  <img src="images/customer3.jpeg" class="img-fluid rounded-circle m-5" width="150">
                  <blockquote class="blockquote text-white">
                    <p class="mb-5"> I'm so happy with what voyage escort provided me. It planned the perefect trip for me in Switzerland, full of beautiful places to visits and fun activities to engage in! </p>
                  </blockquote>
                  <h5 class="text-light text-uppercase font-weight-bold mb-3">Helen</h5>
                  <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fas fa-star text-warning"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end of customers -->


    <footer  class="bg-dark px-5" id="contact">
      <div class="container-fluid">
        <div class="row text-light py-4">
          <div class="col-lg-4 col-sm-12">
            <h5 class="pb-3">About Us</h5>
            <p class="small">
              Voyage escort is your guide to find unique, authentic places to stay and things to do, offering accommodations, transportation and diverse activities, all within the old continent, Europe.

              Restricted to a budget and thirsty for a trip? Explore our different offers and packages and choose among those that suit you best and meet your passion!
            </p>
          </div>
          <div class="col-lg-4 col-sm-12" style="text-align:center">
            <h5 class="pb-3">Visit Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="mainpage.php" class="footer-link">Home</a>
              </li>
              <li>
                <a href="#mission1"  class="footer-link">Mission</a>
              </li>
              <li>
                <a href="#customers1" class="footer-link">Customers</a>
              </li>
            </ul>
          

          </div>
          <div class="col-lg-4 col-sm-12">
            <h5 class="pb-3">Need Help</h5>
            <ul class="list-unstyled">
              <li>
                <p class="footer-link text-uppercase">Customer Service</p>
              </li>
               <li>
                <p class="footer-link text-uppercase">Call us on: 06/921048</p>
              </li>
               <li>
                <p class="text-info">voyage.escort@gmail.com</p>
              </li>
            </ul>

          </div>

        </div>
        <div class="row">
          <div class="col text-center text-light border-top pt-3">
          </div>
        </div>
      </div>
    </footer> 
    <!-- end of Pricing -->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="mainpage.js"></script>
  </body>
</html>
