<?php
$connection = mysqli_connect('localhost','USERNAME_HERE','PASSWORD_HERE');



if(!$connection){
	die("Database connection failed" . mysql_error($connection));
}

$selectdb = mysqli_select_db($connection,'YOUR_DATABASE_HERE');

if(!$selectdb){
	die("Database selection failed" . mysql_error($connection));
}

?>
