<?php

session_start();
	
if(isset($_SESSION['uname'])){

require_once('connect.php');

$readsql = "SELECT * FROM `tblbooks`";
$readsql2 = "SELECT * FROM `tblauthors`";
$readsql3 = "SELECT * FROM `tblcategories`";

$res = mysqli_query($connection, $readsql);
$res2 = mysqli_query($connection, $readsql2);
$res3 = mysqli_query($connection, $readsql3);





echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>pomegranate db</title>";
	
echo "<!-- Latest compiled and minified CSS -->";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";



echo "<!-- Latest compiled and minified JavaScript -->";
echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>";



	
echo "</head>";
echo "<body>";

echo "<br><a href='../php/logout.php'><input type=button name=logout value=logout></a>";

echo "<p style='margin-top:5px; margin-bottom:5px;'></p>";

echo "<a href='../php/addnew.php'><input type=button name=addnewdata  value='add new data'></a>";
		

echo "<div class='container'>";
echo "<div class='row'>";	
echo "<table class='table'>";		
echo "<tr>";			
echo "<th>Title</th>";				
			
echo "<th>Author</th>";				
			
echo "<th>Price</th>";				
				
echo "<th>Image</th>";				
			
echo "<th>Options</th>";				
echo "</tr>";			
			
			

			if (mysqli_num_rows($res) > 0)
				
			{
			
			while($r = mysqli_fetch_array($res))
			while($r2 = mysqli_fetch_array($res2))
			while($r3 = mysqli_fetch_array($res3))
			
			{
			

			
			
echo "<tr>";			
echo "<td>$r[name]</td>";				
				
echo "<td>$r2[author]</td>";				
			
echo "<td>$r[price]</td>";				
				
echo "<td>$r[image]</td>";				
				
				
echo "<td><a href='../php/updateform.php?id=$r[id]'>Edit</a>&nbsp&nbsp&nbsp<a class='confirmation' href='delete.php?id=$r[id]'>Delete</a></td>";				
				
	
echo "</tr>";			

}}	
			
			
echo "</table>";		
		
		
		
				
echo "<script type='text/javascript'>";	
	
echo "var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }";
    
echo "</script>";	
		
		
		
echo "</div>";	
echo "</div>";






echo "</body>";
echo "</html>";

}
		
		
		else {
		
		echo "<script>location.href='../index.php'</script>";
	
	
	}
	


?>