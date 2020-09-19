<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainpage.css">
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
              <a href="package.php" class="nav-link m-2 menu-item nav-active">Continue booking</a>
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

<?php

error_reporting(E_ERROR | E_PARSE);
//header('Content-Type: application/json');
$carid=$_GET["carid"];
$hotelcode=$_GET["hotelid"];
$email=$_SESSION["signedin"];

$db_host="localhost";
$db_user="root";
$db_pass=null;
$db_name="project"; 


$mysqli=new mysqli($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno())
{
    echo("connect failed");
    exit();
}
//for activities
$stmt0= $mysqli -> prepare("SELECT country FROM hotels WHERE idhotel = ?");
$stmt0 -> bind_param ("s", $hotelcode); 
$stmt0 -> execute();
$stmt0 -> store_result();
$stmt0 -> bind_result($countryy);
$count4= $stmt0->num_rows; 

//echo($countryy);
if($count4>0)
{
  while ($stmt0->fetch())
  {
    $save = $countryy;
  }
}
$stmt11= $mysqli -> prepare("SELECT activityname FROM activities WHERE country=?");
$stmt11-> bind_param ("s", $save); 
$stmt11-> execute();
$stmt11-> store_result();
$stmt11-> bind_result($activity);
$count3= $stmt11->num_rows;

?>
<table style="position:fixed; top:20%">
<strong style="font-size:20px; color:blue; position:absolute; top:120px"><u>Your Trip Guide:</u></strong>
<?php
    while($stmt11->fetch()) {
        ?>
        <tr>
            <td><strong>- <?=$activity?></strong></td>
   
        </tr>
        <?php
    }
    ?>
    </table>
    <h1 style="position:fixed;top:50%; left:35%; color: green">Successfully Reserved!</h1>
<?php


$stmt = $mysqli->prepare("INSERT INTO reservations (email,idhotel,code) VALUES ( ?, ?, ?)");
$stmt->bind_param("sii",$email,$hotelcode,$carid);
$stmt->execute();

//echo ("successfully reserved");

?>

<footer style="position:fixed; bottom:0px" class="bg-dark px-5" id="contact">
      <div class="container-fluid">
        <div class="row text-light py-4">
          <div class="col-lg-4 col-sm-12">
            <h5 class="pb-3">About Us</h5>
            <p class="small">
              Voyage escort is your guide to find unique, authentic places to stay and things to do, offering accommodations, transportation and diverse activities, all within the old continent, Europe.

              Restricted to a budget and thirsty for a trip? Explore our different offers and packages and chose among those that suit you best and meet your passion!
            </p>
          </div>
          <div class="col-lg-4 col-sm-12" style="text-align:center">
            <h5 class="pb-3">Visit Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="mainpage.php" class="footer-link">Home</a>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="footer-link">Mission</a>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="footer-link">Customers</a>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="footer-link">Contact</a>
              </li>
            </ul>

          </div>
          <div class="col-lg-4 col-sm-12">
            <h5 class="pb-3">Need Help</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="footer-link text-uppercase">Customer Service</a>
              </li>
               <li>
                <a href="#" class="footer-link text-uppercase">Online Chat</a>
              </li>
               <li>
                <a href="#" class="footer-link text-uppercase">support</a>
              </li>
               <li>
                <a href="#" class="text-info">voyage.escort@gmail.com</a>
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
</body>
</html>

 
