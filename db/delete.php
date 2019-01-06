<?php


    require_once('connect.php');
    $id = $_GET['id'];

    $deletesql3 = "DELETE FROM `upcoming` WHERE id=$id";
    

    $res3 = mysqli_query($connection, $deletesql3);


if ($res3){
	
	header('location: dashboard2.php');
	
}else{

echo "Failed to delete record";

}


?>