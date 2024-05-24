<?php

require 'includs\connect.php';

//خاص بترقيم صفحات الجودول
/*$limit = 7;
$page = isset($_GET['page']) ? $_GET['page'] : 1  ;
$start = ($page -1) * $limit;
*/
//التحقق من بدأ عملية البحث
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
      $s_earch    =  $_POST['search'] ;
      $Q12 = "SELECT * FROM entraineurs WHERE nom_prenom  LIKE '%$s_earch%' or email LIKE '%$s_earch%' ;";
    }
  }

} else { // عرض جميع محتويات الجدول

  $Q12 = "SELECT * FROM entraineurs ;";
  

}

if(!isset($Q12))  $Q12 = "SELECT * FROM entraineurs LIMIT 0 ,0 ;";

$get = mysqli_query($connect , $Q12);  //تنفيذ التعليمة
if (!$get) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}


while ($row = mysqli_fetch_assoc($get)) {
  echo "<style> td{
    text-align: center;
  } </style>";
  echo "<tr>";
  echo "<td>" . $row['id']   . "</td>" ;
  echo "<td>" . $row['nom_prenom']   . "</td>" ;
  echo "<td >" . $row['email'] . "</td>" ;
  echo "<td >" . $row['tel'] . "</td>" ;
  echo "</tr>";
}




$connect->close();