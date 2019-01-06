


<?php
	session_start();
	
	if(isset($_SESSION['uname'])){
		
		require_once('../db/connect.php');
		
		$id = $_GET['id'];
		
		$selectsql3 = "SELECT * FROM `upcoming` WHERE id=$id";
		
		$res3 = mysqli_query($connection, $selectsql3);

		$r3 = mysqli_fetch_assoc($res3);
		
		// print_r($_POST);
		

		if(isset($_POST) & !empty($_POST)){
		
		$voucherno = mysqli_real_escape_string($connection, $_POST['voucherno']);
		
		$arrivaldate = mysqli_real_escape_string($connection, $_POST['arrivaldate']);
		
		
		$departuredate = mysqli_real_escape_string($connection, $_POST['departuredate']);
		
		$guestname = mysqli_real_escape_string($connection, $_POST['guestname']);
		

		$tourhandler = mysqli_real_escape_string($connection, $_POST['tourhandler']);
		
		
		$way = mysqli_real_escape_string($connection, $_POST['way']);
		
		
		$vehicletype = mysqli_real_escape_string($connection, $_POST['vehicletype']);
		
		
		$driverdetails = mysqli_real_escape_string($connection, $_POST['driverdetails']);
		
	
		
		$otherinfo = mysqli_real_escape_string($connection, $_POST['otherinfo']);
		
        $updatesql3 = "UPDATE `upcoming` SET voucher_no='$voucherno', arrival_date='$arrivaldate', departure_date='$departuredate', guest_name='$guestname', tour_handler='$tourhandler', way='$way', vehicle_type='$vehicletype', driver_details='$driverdetails', other_info='$otherinfo' WHERE id=$id";
	
		
		$res3 = mysqli_query($connection, $updatesql3);
		
		if ($res3){

			echo "<span><div id='success-alert' class='alert alert-success'>";
			echo "<strong>Success!</strong> data inserted successfully. You will be redirected to dashboard!";
			echo "</div></span>";
			header( "refresh:2;url=../db/dashboard2.php" );
				

		}else{
			echo "<span><div id='success-alert' class='alert alert-warning'>";
			echo "<strong>Failed!</strong> Failed to insert data";
			echo "</div></span>";
			

	


		}
		
		
	
		
		
		}
		
	

		
		
		
		
		
		
		
		
echo "<html>";
echo "<head>";

echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";

echo "<title>Upcoming Tours</title>";
	
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";



echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>";



	
echo "</head>";
echo "<body>";



		//echo "<h2>Welcome to JBooks databse !</h2>";
		
		//echo "<br><a href='permit.php'><input type=button name=back value=back></a>";

	
		echo "<br><a href='../php/logout.php'><input type=button name=logout value=logout></a>";
		
		echo "<p style='margin-top:-10px; margin-bottom:-5px;'></p>";
		
		echo "<br><a href='../db/dashboard2.php'><input type=button name=dashboard value='back to tours'></a>";



echo "<div class='container'>";
echo "<div class='row'>";
echo "<form enctype='multipart/form-data' method='post' class='form-horizontal col-md-7 col-md-offset-2'>";
			
echo "<h2 align='center'>update tour</h2>";




echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Voucher No</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='voucherno' class='form-control' id='voucherno' placeholder='Voucher No' value=$r3[voucher_no]>";
echo "</div>";
echo "</div>";



				
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Arrival Date</label>";
echo "<div class='col-sm-10'>";
echo "<input type='date' name='arrivaldate' class='form-control' id='arrivaldate' placeholder='Arrival Date' value=$r3[arrival_date]>";
echo "</div>";
echo "</div>";




echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Departure Date</label>";
echo "<div class='col-sm-10'>";
echo "<input type='date' name='departuredate' class='form-control' id='departuredate' placeholder='Departure Date' value=$r3[departure_date]>";
echo "</div>";
echo "</div>";




					
					
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Guest Name</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='guestname' class='form-control' id='guestname' placeholder='Guest Name' value='$r3[guest_name]'>";
echo "</div>";
echo "</div>";
					
		
		
		
		


echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Tour Handler</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='tourhandler' class='form-control' id='tourhandler' placeholder='Tour Handler' value='$r3[tour_handler]'>";
echo "</div>";
echo "</div>";







echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Way</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='way' class='form-control' id='way' placeholder='Way' value='$r3[way]'>";
echo "</div>";
echo "</div>";
			






//to be edited


$ifcar = '';
$ifvan = '';
$ifaxio = '';
$ifprius = '';
$ifkdhf = '';
$ifkdhh = '';
$ifcoach = '';
$ifminicoach = '';
$ifother = '';
$ifnots = '';


if($r3['vehicle_type']=='Car'){
	
    $ifcar = 'selected';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
    
}elseif($r3['vehicle_type']=='Van'){
	
    $ifcar = '';
    $ifvan = 'selected';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
    
    
}elseif($r3['vehicle_type']=='Axio'){
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = 'selected';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
    
}elseif($r3['vehicle_type']=='Prius'){
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = 'selected';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
	
}elseif ($r3['vehicle_type']=='KDH_f') {
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = 'selected';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
	
}elseif ($r3['vehicle_type']=='KDH_h') {
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = 'selected';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
}elseif ($r3['vehicle_type']=='Coach') {
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = 'selected';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = '';
    
    
}elseif ($r3['vehicle_type']=='Mini Coach') {
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = 'selected';
    $ifother = '';
    $ifnots = '';
	
}elseif ($r3['vehicle_type']=='other') {
	
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = 'selected';
    $ifnots = '';
    
}else{
    
    $ifcar = '';
    $ifvan = '';
    $ifaxio = '';
    $ifprius = '';
    $ifkdhf = '';
    $ifkdhh = '';
    $ifcoach = '';
    $ifminicoach = '';
    $ifother = '';
    $ifnots = 'selected';
    
}




echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Vehicle Type</label>";
echo "<div class='col-sm-10'>";
echo "<select name='vehicletype' id='vehicletype' class='form-control'>";



$ifnots = "<option value='Not Selected' $ifnots>Not Selected</option>";
eval( "\$ifnots = \"$ifnots\";" );
echo $ifnots;



$ifcar = "<option value='Car' $ifcar>Car</option>";
eval( "\$ifcar = \"$ifcar\";" );
echo $ifcar;


$ifvan = "<option value='Van' $ifvan>Van</option>";
eval( "\$ifvan = \"$ifvan\";" );
echo $ifvan;


$ifaxio = "<option value='Axio' $ifaxio>Axio</option>";
eval( "\$ifaxio = \"$ifaxio\";" );
echo $ifaxio;

$ifprius = "<option value='Prius' $ifprius>Prius</option>";
eval( "\$ifprius = \"$ifprius\";" );
echo $ifprius;


$ifkdhf = "<option value='KDH_f' $ifkdhf>KDH_f</option>";
eval( "\$ifkdhf = \"$ifkdhf\";" );
echo $ifkdhf;


$ifkdhh = "<option value='KDH_h' $ifkdhh>KDH_h</option>";
eval( "\$ifkdhh = \"$ifkdhh\";" );
echo $ifkdhh;


$ifcoach = "<option value='Coach' $ifcoach>Coach</option>";
eval( "\$ifcoach = \"$ifcoach\";" );
echo $ifcoach;


$ifminicoach = "<option value='Mini Coach' $ifminicoach>Mini Coach</option>";
eval( "\$ifminicoach = \"$ifminicoach\";" );
echo $ifminicoach;


$ifother = "<option value='other' $ifother>other</option>";
eval( "\$ifother = \"$ifother\";" );
echo $ifother;


echo "</select>";
echo "</div>";
echo "</div>";


//to be edited














					
			
					
					
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Driver Details</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='driverdetails' class='form-control' id='driverdetails' placeholder='Driver Details' value='$r3[driver_details]'>";
echo "</div>";
echo "</div>";









echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Other Info</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='otherinfo' class='form-control' id='otherinfo' placeholder='Other Info' value='$r3[other_info]'>";
echo "</div>";
echo "</div>";
					




					


				
echo "<input type='submit' class='btn btn-primary col-md-3 col-md-offset-10' value='update this tour'/>";
					
echo "</form>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";



		}
		
		
		else {
		
		echo "<script>location.href='../index.php'</script>";
	
	
	}
	
	
?>

