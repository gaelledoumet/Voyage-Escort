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
            if(isset($_SESSION["signedin"])){?>
            <form action="logout.php">
            <button type ="submit" class="btn m-2  btn-outline-light btn-default btn-block " >Log out</button>
          
            </form>
            <?php } ?>


        </div>
      </nav>

<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$account_email=$_SESSION["signedin"];
//echo $account_email;
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



$stmt = $mysqli->prepare("SELECT r.idhotel, r.code, h.photo_url FROM reservations r, hotels h WHERE r.email=? and r.idhotel = h.idhotel");
$stmt->bind_param("s", $account_email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hotel, $code, $hotelphoto);//what ure selecting
$count = $stmt->num_rows; //rows of the resulting table
if ($count==0)
{?>
  <h1 style="position:fixed;top:50%; left:50%">You have not booked anything yet.</h1><?php
}

else{
  //echo($count);
?>
<table style="margin-top:120px">
<?php
    while($stmt->fetch()) {
        ?>
        <tr>
            <td><img width=300px, height=250px, src=<?=$hotelphoto?>></td>
            <td><strong>Hotel code:</strong><?=$hotel?></td>
            <td><strong>Car Code:</strong><?=$code?></td>
   
        </tr>
        <?php
    }
    ?>
    </table>
<?php
}

?>


</body>
</html>
