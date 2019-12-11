<?php
include "includes/connect.php";
if(isset($_POST['submit']) )
{
	$type= $_POST['type'];
	$s=$_POST['sports'];
	foreach ($_POST['teams'] as $i) {
			if($type=='boys'){
				$q="update olympus_points_b set ".$s."=10 where class='".$i."'";
				mysqli_query($conn,$q);
				//echo $q;
				$q1="update olympus_points_b set ".$s."=-10 where ".$s."=0 and class!='".$i."'";
				mysqli_query($conn,$q1);
			}
			if($type=='girls'){
				$q="update olympus_points_g set ".$s."=10 where class='".$i."'";
				mysqli_query($conn,$q);
				$q1="update olympus_points_g set ".$s."=-10 where ".$s."=0 and class!='".$i."'";
				mysqli_query($conn,$q1);
			}
}
}
?>