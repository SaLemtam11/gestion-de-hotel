<?php

require 'includs\connect.php';



$stmt_2 = mysqli_stmt_init($connect);
$Q_2 = "SELECT * FROM admin ;";

if (!mysqli_stmt_prepare($stmt_2 , $Q_2)) {
  die("STMT ERR");
}

mysqli_stmt_execute($stmt_2);
$data_2 = mysqli_stmt_get_result($stmt_2);

if (!mysqli_fetch_assoc($data_2)) {
  die("No Info getting");
}

$allusers = 0;



while ($row = mysqli_fetch_assoc($data_2)) {
  $allusers++;
}

$pages = ceil($allusers / $limit);

for ($i=1; $i <= $pages ; $i++) {
  echo '<li class="page-item"  > <a class="page-link"  href="dashbord.php?page='.$i.'">'.$i.'</a> </li>';
}
