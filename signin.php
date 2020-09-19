<?php
error_reporting(E_ERROR | E_PARSE);
header('Content-Type:text/plain');

$account_email=$_POST["email"];
$account_pw= $_POST["password"];

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



$stmt = $mysqli->prepare("SELECT email FROM users WHERE email=? AND password=? ");
$stmt->bind_param("ss", $account_email,hash('md5',$account_pw));
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($email);//what ure selecting
$count = $stmt->num_rows; //rows of the resulting table
console.log($count);
if ($count==0)
{
echo("wrong password or username");
}

else{
session_start();
$_SESSION["signedin"]=$account_email;
echo("successfully logged in");
}

?>