<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="mainpage.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="package.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Voyage Escort</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="hotel.js?newversion"></script>
    <style>
    .loader {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #3498db;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      float: center;
      margin-left: calc(50% - 30px);
      animation: spin 2s linear infinite;
    }
    table tr{text-align:center}

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .tohide{  background: url('https://wallpaperaccess.com/full/41214.jpg') no-repeat;
               width: 100%;
                height: 100vh;
                 background-size: 100%;}

    .grayrounded{line-height: 10px;
                  text-align: center;
                  font-size:15px;
                  border-radius: 25px;
                  padding: 0px; 
                  width: 220px; 
                  height: 50px;}
    </style>
  </head>
  <body>
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
                      <a href="mainpage.php" class="nav-link m-2 menu-item nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                      <a href="history.php" class="nav-link m-2 menu-item">Check my history</a>
                    </li>
                    </ul>

                    <?php session_start();
                    if (isset($_SESSION["signedin"])){?>
                    <form action="logout.php">
                     <button type ="submit" class="btn m-2  btn-outline-light btn-default btn-block " >Log out</button>
          
                    </form>
                    <?php } ?>

                </div>
            </nav>
            <div class="container">    
              <div class="row c1">
                  <div class="col-sm-12 col-md-6 col-lg-3">                           
                    <select  class="grayrounded" id="country" name="country">

                    <option selected disabled>City</option>
    
                    <optgroup label="belgium">
                         <option>Bruges</option>
                         <option>Ghent</option>
                         <option>Brussels</option>
                         <option>Leuven</option>
                         <option>Antwerp</option>
                    </optgroup>
                    <optgroup label="belarus">
                            <option>Minsk</option>
                            <option>Brest</option>
                            <option>Grodno</option>
                            <option>Gomel</option>
                            <option>Polatsk</option>
                    </optgroup>
                    <optgroup label="bosnia & herzegovina">
                            <option>Mostar</option>
                            <option>Blagaj</option>
                            <option>Trebinji</option>
                            <option>Travnik</option>
                    </optgroup>
                    <optgroup label="bulgaria">
                            <option>Sofia</option>
                            <option>Plovdiv</option>
                            <option>Varna</option>
                            <option>Burgas</option>
                            <option>Bansko</option>
                    </optgroup>
                    <optgroup label="croatia">
                            <option>Split</option>
                            <option>Zagreb</option>
                            <option>Dubrovnik</option>
                            <option>Zadar</option>
                            <option>Pula</option>
                    </optgroup>
                    <optgroup label="cyprus">
                            <option>Paphos</option>
                            <option>Larnaca</option>
                            <option>Ayia Napa</option>
                            <option>Limassol</option>
                            <option>Protaras</option>
                    </optgroup>
                    <optgroup label="denmark">
                            <option>Esberj</option>
                            <option>Roskilde</option>
                            <option>Skagen</option>
                            <option>Odense</option>
                            <option>Copenhagen</option>
                    </optgroup>
                    <optgroup label="estonia">
                            <option>Tallinn</option>
                            <option>Tartu</option>
                            <option>Narva</option>
                            <option>Parnu</option>
                            <option>Valga</option>
                    </optgroup>
                    <optgroup label="finland">
                            <option>Helsinki</option>
                            <option>Turku</option>
                            <option>Tampere</option>
                            <option>Porvoo</option>
                            <option>Vaasa</option>
                    </optgroup>
                    <optgroup label="france">
                            <option>Paris</option>
                            <option>Nice</option>
                            <option>Bordeaux</option>
                            <option>Marseille</option>
                            <option>Toulouse</option>
                    </optgroup>
                    <optgroup label="germany">
                            <option>Berlin</option>
                            <option>Munich</option>
                            <option>Hamburg</option>
                            <option>Frankfurt</option>
                            <option>Cologne</option>
                    </optgroup>
                    <optgroup label="greece">
                            <option>Athens</option>
                            <option>Thessaloniki</option>
                            <option>Pireas</option>
                            <option>Kalamata</option>
                            <option>Patras</option>
                    </optgroup>
                    <optgroup label="italy">
                            <option>Rome</option>
                            <option>Venice</option>
                            <option>Florence</option>
                            <option>Milan</option>
                            <option>Pisa</option>
                    </optgroup>
                    <optgroup label="kazakhstan">
                            <option>Almaty</option>
                            <option>Nur-Sultan</option>
                            <option>Turkistan</option>
                    </optgroup>
                    <optgroup label="moldova">
                            <option>Chisinau</option>
                            <option>Tiraspol</option>
                            <option>Soroca</option>
                            <option>Balti</option>
                            <option>Bender</option>
                    </optgroup>
                    <optgroup label="netherlands">
                            <option>Amsterdam</option>
                            <option>Rotterdam</option>
                            <option>The Hague</option>
                            <option>Arnhem</option>
                            <option>Gouda</option>
                    </optgroup>
                    <optgroup label="norway">
                            <option>Oslo</option>
                            <option>Bergen</option>
                            <option>Alesund</option>
                            <option>Tromso</option>
                            <option>Trondheim</option>
                    </optgroup>
                    <optgroup label="poland">
                            <option>Krakow</option>
                            <option>Warsaw</option>
                            <option>Wroclaw</option>
                            <option>Poznan</option>
                            <option>Lublin</option>
                    </optgroup>
                    <optgroup label="romania">
                            <option>Sibiu</option>
                            <option>Brasov</option>
                            <option>Bucharest</option>
                            <option>Sighisoara</option>
                            <option>Cluj-Napoca</option>
                    </optgroup>
                    <optgroup label="russia">
                            <option>Moscow</option>
                            <option>Saint Petersburg</option>
                            <option>Kazan</option>
                            <option>Sochi</option>
                            <option>Volgograd</option>
                    </optgroup>
                    <optgroup label="slovakia">
                            <option>Nitra</option>
                            <option>Trnava</option>
                            <option>Bratislava</option>
                            <option>Levoca</option>
                            <option>Kezmarock</option>
                    </optgroup>
                    <optgroup label="slovenia">
                            <option>Piran</option>
                            <option>Ljubjana</option>
                            <option>Maribor</option>
                            <option>Ptuj</option>
                            <option>Koper</option>
                    </optgroup>
                    <optgroup label="spain">
                            <option>Madrid</option>
                            <option>Barcelona</option>
                            <option>Seville</option>
                            <option>Cordoba</option>
                            <option>Granada</option>
                    </optgroup>
                    <optgroup label="sweden">
                            <option>Stockholm</option>
                            <option>Malmo</option>
                            <option>Visby</option>
                            <option>Lund</option>
                            <option>Uppsala</option>
                    </optgroup>
                    <optgroup label="switzerland">
                            <option>Zurich</option>
                            <option>Geneva</option>
                            <option>Bern</option>
                            <option>Basel</option>
                            <option>Lausanne</option>
                    </optgroup>
                    <optgroup label="turkey">
                            <option>Istanbul</option>
                            <option>Antalya</option>
                            <option>Ankara</option>
                            <option>Izmir</option>
                            <option>Konya</option>
                    </optgroup>
                    <optgroup label="united Kingdom">
                            <option>Edinburgh</option>
                            <option>Birmingham</option>
                            <option>York</option>
                            <option>Bristol</option>
                            <option>Liverpool</option>
                    </optgroup>
                    <optgroup label="ukraine">Ukraine
                            <option>Kyiv</option>
                            <option>Lviv</option>
                            <option>Odesa</option>
                            <option>Kharkiv</option>
                            <option>Lutsk</option>
                    </optgroup>
                    <optgroup label="vatican city">
                            <option>Vatican city</option>
                    </optgroup>
                 </select>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-3">
                  <input placeholder="Checkin" class="grayrounded" type="date" name="Arrival time" id="checkin">
                  <input placeholder="Checkout" class="grayrounded" type="date" name="Departure time" id="checkout">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3">
                 <select class="grayrounded" id="budget" name="budget" >
                      <option selected disabled>Budget in USD</option>
                     <option>500</option>
                     <option>1500</option>
                     <option>2000</option>
                     <option>2500</option>
                     <option>3000</option>
                     <option>3500</option>
                 </select>
                 </div>

                  <div class="col-sm-12 col-md-6 col-lg-3">
                      <button class="grayrounded" id="bt_search"><strong>Search</strong></button>
                  </div>

                </div>

                </div>

                 <hr id="hr">
                 <div class="loader"></div>
            <div class="tohide"></div>       


<table style="width:100%;border:inset" id="toadd" class="clara">
  
</table>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>