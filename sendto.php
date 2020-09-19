<?php
    session_start();

    $carid=$_GET["carid"];
    $hotelid=$_GET["hotelid"];
if(isset($_SESSION["signedin"]))
{
    header('location:reserve.php?carid='.$carid.'&hotelid='.$hotelid);
}
else
{
    header('location:signin.html?carid='.$carid.'&hotelid='.$hotelid);
}

?>