<?php include 'connect.php';
if (isset($_POST['submit'])) {
  $u=$_POST['username'];
  $p=$_POST['pass'];

  $q="select * from olympus_user where username='$u' and password='$p'";
  mysqli_query($conn,$q);
  if (mysqli_affected_rows($conn)>0) {
    header("location:../dashboard.php");
    exit();
  } else {
    header("location:../");
    exit();
    //var_dump($q);
  }

} else {
header("location:../");
exit();
}

 ?>
