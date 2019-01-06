<?php
$page = $_SERVER['PHP_SELF'];
$sec = "15";
?>



<?php



require_once('connect.php');


$readsql = "SELECT * FROM `upcoming`";

$res = mysqli_query($connection, $readsql);


?>



<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Upcoming Tours</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	
</head>
<body onload="sortTable();">



<a href='../index.php'><input type=button name=adminlogin  value="add / update tours"></a>
		

<div class="container">
	<div class="row">
		<table class="table" id="overa_excel">
			<tr>
			    
			    <th>Voucher No</th>
			    
				<th>Arrival Date</th>
				
				<th>Departure Date</th>
			
				<th>Guest Name</th>
				
				<th>Tour Handler</th>
				
				<th>Way</th>
			
				<th>Vehicle Type</th>
				
				<th>Driver Details</th>
				
				<th>Other Info</th>
			
				
			</tr>
			
			
			<?php
			if (mysqli_num_rows($res) > 0)
				
			{
			
			while($r = mysqli_fetch_array($res))
	
			
			{
			
			?>
		
			
			<tr>
			    
			    <td><?php echo $r['voucher_no']; ?></td>
			    
				<td><?php echo $r['arrival_date']; ?></td>
				
				<td><?php echo $r['departure_date']; ?></td>
				
				<td><?php echo $r['guest_name']; ?></td>
				
				<td><?php echo $r['tour_handler']; ?></td>
				
				<td><?php echo $r['way']; ?></td>
			
				<td><?php echo $r['vehicle_type']; ?></td>
				
				<td><?php echo $r['driver_details']; ?></td>
				
				<td><?php echo $r['other_info']; ?></td>
			
				
	
			</tr>

			<?php }} ?>
			
			
		</table>
		
		
		<button class="btn btn-success" id="export">Export to Excel</button>
				
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



<script>
    
    
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
    
    
</script>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="jquery.tabletocsv.js"></script>
<script>
$('#export').on('click',function(){
  $('#overa_excel').tableToCsv();
  
})
  </script>













</body>








<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>








</html>