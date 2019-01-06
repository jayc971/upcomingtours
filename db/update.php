<?php




require_once('connect.php');
$id = $_GET['id'];
$selectsql = "SELECT * FROM `crud` WHERE id=$id";
$res = mysqli_query($connection, $selectsql);
$r = mysqli_fetch_assoc($res);

		// print_r($_POST);
if(isset($_POST) & !empty($_POST)){		
		$fname = mysqli_real_escape_string($connection, $_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$gender = mysqli_real_escape_string($connection, $_POST['gender']);
		$age = mysqli_real_escape_string($connection, $_POST['age']);
		
		//$createsql = "INSERT INTO `crud` (firstname, lastname, email, gender, age) VALUES ('$fname', '$lname', '$email', '$gender','$age')";
		
		$updatesql = "UPDATE `crud` SET firstname='$fname', lastname='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
		
		$res = mysqli_query($connection, $updatesql);
		
		if ($res){
			echo "Successfully updated data";
			header('location: dashboard.php');
			
		}else{
			echo "Failed to update data";
		}
		

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD App - Update Data</title>
	
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	
</head>
<body>


<br>
<a href='../db/dashboard.php'><input type=button name=collection value=collection></a>
<p style='margin-top:-15px; margin-bottom:-15px;'></p>
<br><a href='../php/logout.php'><input type=button name=logout value=logout></a>




	<div class="container">
		<div class="row">
			<form method="post" class="form-horizontal col-md-7 col-md-offset-2">
			
				<h2 align="center">Update this tour</h2>
				
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" name="fname" class="form-control" id="input1" value="<?php echo $r['firstname']?>" placeholder="First Name"/>
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-10">
							<input type="text" name="lname" class="form-control" id="input1" value="<?php echo $r['lastname']?>" placeholder="Last Name"/>
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">E-Mail</label>
						<div class="col-sm-10">
							<input type="email" name="email" class="form-control" id="input1" value="<?php echo $r['email']?>" placeholder="E-Mail"/>
						</div>
					</div>
					
					
					<div class="form-group" class="radio">
						<label for="input1" class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-10">
							<label>
								<input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($r['gender']=='male'){echo 'checked';}?>>Male
							</label>
							<label>
								<input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($r['gender']=='female'){echo 'checked';}?>>Female
							</label>
						</div>
					</div>
					
					
					
					
					<div class="form-group" class="radio">
						<label for="input1" class="col-sm-2 control-label">Age</label>
						<div class="col-sm-10">
							<select name="age" class="form-control">
								<option>Select your age</option>
								<option value="20" <?php if($r['age']=='20'){echo 'selected';}?>>20</option>
								<option value="21" <?php if($r['age']=='21'){echo 'selected';}?>>21</option>
								<option value="22" <?php if($r['age']=='22'){echo 'selected';}?>>22</option>
								<option value="23" <?php if($r['age']=='23'){echo 'selected';}?>>23</option>
								<option value="24" <?php if($r['age']=='24'){echo 'selected';}?>>24</option>
							</select>
						</div>
					</div>
					
					<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="update this tour"/>
					
			</form>
		</div>
	</div>
</body>
</html>