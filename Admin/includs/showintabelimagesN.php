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
      $Q = "SELECT * FROM imagesn WHERE image_url LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q = "SELECT * FROM imagesn ;";
  

}

if(!isset($Q))  $Q = "SELECT * FROM imagesn LIMIT 0 ,0 ;";

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
  echo "<td>" . $row['image_url']   . "</td>" ;  
  echo "<td> " ; include 'includs\actionIconimg2.php' ; echo "</td>" ; 
  echo "</tr>";
}
  

$connect->close();




