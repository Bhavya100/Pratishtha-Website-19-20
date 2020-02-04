<?php
include 'includes/connect.php';
if(isset($_POST['submit']) )
{
  $type= $_POST['type'];
  $s=$_POST['sports'];
  $winner= $_POST['winner'];
  $runner=$_POST['runner'];
  if($type=='boys'){
    $q="update olympus_winners set winner_boys='".$winner."', runnerup_boys='".$runner."' where sports='".$s."'";
    mysqli_query($conn,$q);
    echo $q;
  }
  if($type=='girls'){
    $q="update olympus_winners set winner_girls='".$winner."', runnerup_girls='".$runner."' where sports='".$s."'";
    mysqli_query($conn,$q);
    echo $q;
  }
}
 ?>