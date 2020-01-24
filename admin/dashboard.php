<?php session_start();
if($_SESSION['admin']==false){
  header("location:index.php");
  exit();
} ?>
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
      <li><a href="upload.php"> upload PDF</a></li>
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

}
$q2="select class,boxcricket+throwball+dodgeball+tabletennis+badminton+tug_of_war+carrom+chess+athletics+basketball as t from olympus_points_g ";
$r2=mysqli_query($conn,$q2);
while ($row2=mysqli_fetch_array($r2)) {
  $q3="update olympus_points_g set total=".$row2['t']." where class='".$row2['class']."'";
  mysqli_query($conn,$q3);

}
 ?>
