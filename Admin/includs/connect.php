<?php
/* session_start(); */
$serverName = "localhost";
$userName = "root";
$passWord = "";
$dataBaseName = "reservation";

$connect =  mysqli_connect($serverName ,$userName ,$passWord ,$dataBaseName );
if(mysqli_connect_errno()) die("data base no connect ". mysqli_connect_errno() );
