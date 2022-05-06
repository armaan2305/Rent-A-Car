<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Manage bookings</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'adminheader.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		
		
					<!-- Box Head -->
					
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th><h4>Client Name</th>
								<th><h4>Car Booked</th>
								<th><h4>Cost</th>
								<th><h4>From Date</th>

								<th><h4>To Date</th>
								<th><h4>Message</th>
								<th width="200" class="ac"><h4>Content Control</th></h3>
							</tr>
							<?php
								include ('dbconnect/dbconnect.php');
								$select = "SELECT bookings.id,bookings.fullname,bookings.fromdate,bookings.todate,bookings.message,cars.car_name,cars.cost
										FROM bookings JOIN cars ON bookings.carname=cars.car_id";
								$result = $link->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							
								<td><h6><?php echo $row['fullname'] ?></h6></td>
								<td><h6><?php echo $row['car_name'] ?></h6></td>
								<td><h6><?php echo $row['cost'] ?></h6></td>
								<td><h6><?php echo $row['fromdate'] ?></h6></td>
								<td><h6><?php echo $row['todate'] ?></h6></td>
								<td><h6><?php echo $row['message'] ?></h6></td>
								<td><h6><a href="javascript:sureToApprove(<?php echo $row['id'];?>)" class="ico del">Approve</a><a href="delete.php" class="ico edit">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<!-- Pagging -->
					
						<!-- End Pagging -->
						
					
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
				
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->

<!-- End Footer -->
	
</body>
</html>