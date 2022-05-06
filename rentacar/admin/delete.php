<?php
	include 'dbconnect/dbconnect.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM bookings WHERE id = '$id'";
	$result = $link->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Deleted';
	?>
		<meta content="4; managebooking.php" http-equiv="refresh" />
	<?php
	}
?>
