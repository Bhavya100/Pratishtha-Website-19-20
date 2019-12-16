<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><a href="admin.php"> participation </a></li>
      <li><a href="winners.php"> select winners </a></li>
    </ul>
  </body>
</html>
<?php
include 'includes/connect.php';
$q="select class,cricket+football+volleyball+tabletennis+badminton+kabaddi+tug_of_war+carrom+chess+athletics+basketball as t from olympus_points_b ";
$r=mysqli_query($conn,$q);
while ($row=mysqli_fetch_array($r)) {
  $q1="update olympus_points_b set total=".$row['t']." where class='".$row['class']."'";
  mysqli_query($conn,$q1);
  echo $q1."<br>";
}
 ?>
