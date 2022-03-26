<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");
mysqli_query($conn,"SET NAMES UTF8");
mysqli_query($conn,"SET character_set_results=utf8");
mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");


if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("Connection failed:".$conn->connect_error);
}



?>