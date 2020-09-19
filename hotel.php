<?php
error_reporting(E_ERROR | E_PARSE);
header('Content-Type: application/json');
$name=$_POST["name"];
$photo=$_POST["photo"];
$price=(int)substr($_POST["price"],1,strpos($_POST["price"],"per")-1);
$url=$_POST["url"];
$duration = (int)$_POST["duration"];
$country=$_POST["country"];
$city=$_POST["city"];
$budget=(int)$_POST["budget"];


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



//$stmt0 = $mysqli->prepare("DELETE FROM hotels");
//$stmt0->bind_param();
//$stmt0->execute();

$stmt = $mysqli->prepare("INSERT INTO hotels (hotelname, city, price_night,country,link,photo_url) VALUES ( ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisss", $name,$city,$price,$country,$url,$photo);
$stmt->execute();


$stmt2=$mysqli->prepare("SELECT hotels.idhotel,hotels.hotelname,hotels.price_night, hotels.photo_url,cars.car_type, cars.price_day, cars.code FROM hotels, cars WHERE hotels.country =? AND hotels.city =? AND (hotels.price_night+cars.price_day)*$duration <=?");
$stmt2->bind_param("ssi",$country,$city,$budget);
$stmt2->execute();
$stmt2->store_result();
$stmt2->bind_result($idhotel,$hotelname,$hotelprice,$hotelphoto,$cartype,$carprice,$carcode);

$myObj = new stdClass();
$myObj->choices = array();

while($stmt2->fetch()) {
    $item= new stdClass();
    $item->hotelname=$hotelname;
    $item->hotelprice=$hotelprice;
    $item->hotelphoto=$hotelphoto;
    $item->cartype=$cartype;
    $item->carprice=$carprice;
    $item->carcode=$carcode;
    $item->hotelid=$idhotel;
    $myObj->choices[]=$item; 
}

$myJSON = json_encode($myObj); 
echo $myJSON;


//activities:
/*
$stmt3=$mysqli->prepare("SELECT activityname  FROM activities WHERE country=? ");
$stmt->bind_param("s", $country);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($activityname);//what ure selecting
$count = $stmt->num_rows;

$myObj = new stdClass();
$myObj->activities = array();

while($stmt->fetch()) {
    $myObj->activities[]=$activityname; 
}

$myJSON = json_encode($myObj); 
echo $myJSON;
*/
?>




