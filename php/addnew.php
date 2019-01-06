


<?php
	session_start();
	
	if(isset($_SESSION['uname'])){
		
		require_once('../db/connect.php');
		

		
		
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

	
		$createsql1 = "INSERT INTO `upcoming` (voucher_no, arrival_date, departure_date, guest_name, tour_handler, way, vehicle_type, driver_details, other_info) VALUES ('$voucherno', '$arrivaldate', '$departuredate', '$guestname', '$tourhandler', '$way', '$vehicletype', '$driverdetails', '$otherinfo')";
		
	
	    
	
		
		$res1 = mysqli_query($connection, $createsql1);
		

		
		if ($res1){

			
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
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<head>";



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
			
echo "<h2 align='center'>add new tour</h2>";





echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Voucher No</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='voucherno' class='form-control' id='voucherno' placeholder='Voucher No'/>";
echo "</div>";
echo "</div>";






				
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Arrival Date</label>";
echo "<div class='col-sm-10'>";


echo "<input type='date' name='arrivaldate' class='form-control' id='arrivaldate' placeholder='Arrival Date'/>";


echo "</div>";
echo "</div>";












echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Departure Date</label>";
echo "<div class='col-sm-10'>";



echo "<input type='date' name='departuredate' class='form-control' id='departuredate' placeholder='Departure Date'/>";




echo "</div>";
echo "</div>";








					
					
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Guest Name</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='guestname' class='form-control' id='guestname' placeholder='Guest Name'/>";
echo "</div>";
echo "</div>";








echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Tour Handler</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='tourhandler' class='form-control' id='tourhandler' placeholder='Tour Handler'/>";
echo "</div>";
echo "</div>";






echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Way</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='way' class='form-control' id='way' placeholder='Way'/>";
echo "</div>";
echo "</div>";



					
	


echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Vehicle Type</label>";
echo "<div class='col-sm-10'>";
echo "<select name='vehicletype' id='vehicletype' class='form-control'>";
echo "<option value='Not Selected'>Not Selected</option>";
echo "<option value='Car'>Car</option>";
echo "<option value='Van'>Van</option>";
echo "<option value='Axio'>Axio</option>";
echo "<option value='Prius'>Prius</option>";
echo "<option value='KDH_f'>KDH_f</option>";
echo "<option value='KDH_h'>KDH_h</option>";
echo "<option value='Coach'>Coach</option>";
echo "<option value='MiniCoach'>Mini Coach</option>";
echo "<option value='other'>other</option>";
echo "</select>";
echo "</div>";
echo "</div>";
					
			
					
					
echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Driver Details</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='driverdetails' class='form-control' id='driverdetails' placeholder='Driver Details'/>";
echo "</div>";
echo "</div>";


echo "<div class='form-group'>";
echo "<label for='input1' class='col-sm-2 control-label'>Other Info</label>";
echo "<div class='col-sm-10'>";
echo "<input type='text' name='otherinfo' class='form-control' id='otherinfo' placeholder='Other Info'/>";
echo "</div>";
echo "</div>";







echo "<input type='submit' class='btn btn-primary col-md-2 col-md-offset-10' value='add this tour'/>";
					
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

