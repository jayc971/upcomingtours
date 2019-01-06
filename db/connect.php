<?php
$connection = mysqli_connect('localhost','overatou','Ljoij578F1');



if(!$connection){
	die("Database connection failed" . mysql_error($connection));
}

$selectdb = mysqli_select_db($connection,'overatou_inq');

if(!$selectdb){
	die("Database selection failed" . mysql_error($connection));
}

?>
