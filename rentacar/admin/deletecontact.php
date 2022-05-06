<?php
	include 'dbconnect/dbconnect.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM contactus WHERE id = '$id'";
	$result = $link->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully Deleted\");
					window.location = (\"contact.php\")
				</script>";
	}
?>
