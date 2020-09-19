<?php
  session_start();
  $_SESSION["signedin"] = '';
  session_destroy();
  header('location:mainpage.php');
?>