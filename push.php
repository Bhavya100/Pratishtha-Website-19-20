<?php
include "includes/connect.php";
if(isset($_POST['submit']) )
{
	$type= $_POST['type'];
	$s=$_POST['sports'];
	foreach ($_POST['teams'] as $i) {
		echo $i;	
}
}
?>
<?php

// if(isset($_POST['submit']) )
// {
//   $varMovie = $_POST['formMovie'];
//   $varName = $_POST['formName'];
//   $varGender = $_POST['formGender'];
//   $errorMessage = "";

//   // - - - snip - - - 
// }

?>