<?php
$t= $_POST['type'];
	$s=$_POST['sports'];
 $targetfolder = "../pdf/";

 $targetfolder = $targetfolder .$t."-".$s.".pdf" ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

header("Location:../upload.php?s=success");
 }

 else {

header("Location:../upload.php?s=error");

 }

}

else {

header("Location:../upload.php?s=error");

}

?>