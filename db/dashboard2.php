<?php

session_start();
	
if(isset($_SESSION['uname'])){

require_once('connect.php');


$readsql3 = "SELECT * FROM `upcoming`";


$res3 = mysqli_query($connection, $readsql3);





echo "<!DOCTYPE html>";
echo "<html>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<head>";
echo "<title>Upcoming Tours</title>";
	
echo "<!-- Latest compiled and minified CSS -->";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";



echo "<!-- Latest compiled and minified JavaScript -->";
echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>";



	
echo "</head>";
echo "<body onload='sortTable();'>";

echo "<br><a href='../php/logout.php'><input type=button name=logout value=logout></a>";

echo "<p style='margin-top:5px; margin-bottom:5px;'></p>";

echo "<a href='../php/addnew.php'><input type=button name=addnewdata  value='add new tour'></a>";
		
echo "<br><br>";
echo "<div class='container'>";
echo "<div class='row'>";	



echo "<table class='table' id='overa_excel'>";





echo "<th>Voucher No</th>";
			    
echo "<th>Arrival Date</th>";
				
echo "<th>Departure Date</th>";
			
echo "<th>Guest Name</th>";
				
echo "<th>Tour Handler</th>";
				
echo "<th>Way</th>";
			
echo "<th>Vehicle Type</th>";
				
echo "<th>Driver Details</th>";
				
echo "<th>Other Info</th>";
			
echo "<th>Options</th>";		


echo "</tr>";			
			
			

			if (mysqli_num_rows($res3) > 0)
				
			{
			
			while($r = mysqli_fetch_array($res3))
	
			
			{
			

    		
			
echo "<tr>";



echo "<td>$r[voucher_no]</td>";
			    
echo "<td>$r[arrival_date]</td>";
				
echo "<td>$r[departure_date]</td>";
			
echo "<td>$r[guest_name]</td>";
				
echo "<td>$r[tour_handler]</td>";
				
echo "<td>$r[way]</td>";
			
echo "<td>$r[vehicle_type]</td>";
				
echo "<td>$r[driver_details]</td>";
				
echo "<td>$r[other_info]</td>";


				
echo "<td><a href='../php/updateform.php?id=$r[id]'>Edit</a>&nbsp&nbsp&nbsp<a class='confirmation' href='delete.php?id=$r[id]'>Delete</a></td>";



echo "</tr>";			

}}



echo "</table>";	

echo "<button class='btn btn-success' id='export'>Export to Excel</button>";

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


echo '<script>
    
    
    function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("overa_excel");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      // Check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
    
    
</script>';






echo "<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='jquery.tabletocsv.js'></script>
<script>
$('#export').on('click',function(){
  $('#overa_excel').tableToCsv();
  location.reload();
})
  </script>";



echo "</body>";






echo "<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";









echo "</html>";

}
		
		
		else {
		
		echo "<script>location.href='../index.php'</script>";
	
	
	}
	


?>