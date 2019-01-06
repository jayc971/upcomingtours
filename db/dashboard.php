<?php



require_once('connect.php');

$readsql = "SELECT * FROM `tblbooks`";
$readsql2 = "SELECT * FROM `tblauthors`";
$readsql3 = "SELECT * FROM `tblcategories`";

$res = mysqli_query($connection, $readsql);
$res2 = mysqli_query($connection, $readsql2);
$res3 = mysqli_query($connection, $readsql3);

?>



<!DOCTYPE html>
<html>
<head>
	<title>pomegranate db</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	
</head>
<body>

<br><a href='../php/logout.php'><input type=button name=logout value=logout></a>

<p style='margin-top:5px; margin-bottom:5px;'></p>

<a href='../php/addnew.php'><input type=button name=addnewdata  value="add new data"></a>
		

<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>Title</th>
			
				<th>Author</th>
			
				<th>Price</th>
				
				<th>Image</th>
			
				<th>Options</th>
			</tr>
			
			
			<?php
			if (mysqli_num_rows($res) > 0)
				
			{
			
			while($r = mysqli_fetch_array($res))
			while($r2 = mysqli_fetch_array($res2))
			while($r3 = mysqli_fetch_array($res3))
			
			{
			
			?>
			
			
			<tr>
				<td><?php echo $r['name']; ?></td>
				
				<td><?php echo $r2['author']; ?></td>
			
				<td><?php echo $r['price']; ?></td>
				
				<td><?php echo $r['image']; ?></td>
				
				
				<td><a href="../php/updateform.php?id=<?php echo $r['id']; ?>">Edit</a>&nbsp&nbsp&nbsp<a class="confirmation" href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
				
	
			</tr>

			<?php }} ?>
			
			
		</table>
		
		
		
				
	<script type="text/javascript">
	
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
	</script>
		
		
		
	</div>
</div>






</body>
</html>