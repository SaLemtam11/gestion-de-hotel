<?php

require 'includs\connect.php';

//خاص بترقيم صفحات الجودول
/*$limit = 20;
$page = isset($_GET['page']) ? $_GET['page'] : 1  ;
$start = ($page -1) * $limit;*/

//التحقق من بدأ عملية البحث
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
      $s_earch    =  $_POST['search'] ;
      $Q = "SELECT * FROM admin WHERE login LIKE '%$s_earch%' or nom LIKE '%$s_earch%' or prenom LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q = "SELECT * FROM admin ;";
  

}

if(!isset($Q))  $Q = "SELECT * FROM admin LIMIT 0 ,0 ;";

$get = mysqli_query($connect , $Q);  //تنفيذ التعليمة
if (!$get) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}


while ($row = mysqli_fetch_assoc($get)) {
  echo "<style> td{
    text-align: center;
  } </style>";
  echo "<tr>";
  echo "<td>" . $row['id']   . "</td>" ;
  echo "<td>" . $row['nom']   . "</td>" ;
  echo "<td>" . $row['prenom'] . "</td>" ;
  echo "<td>" . $row['login'] . "</td>" ;
  echo "<td >" . $row['password'] . "</td>" ;
  echo "<td>" . $row['Actif'] . "</td>" ;
  echo "<td> " ; include 'includs\actionIcons.php' ; echo "</td>" ;          
  echo "</tr>";
}


$connect->close();


/*echo "<td> " ; include 'includs\actionIcons.php' ; echo "</td>" ;*/




