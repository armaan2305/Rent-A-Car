<?php
include 'adminheader.php';

?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Manage Contact</title>
<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='deletecontact.php?id='+id;
			}
		}
	</script>
</head>
<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th><h4>Name</h4></th>
								<th><H4>Email</H4></th>
								<th><h4>Mobile</h4></th>
								<th><h4>Message Content</h4></th>
								
								
								<th width="200" class="ac"><h4>Content Control</h4></th>
							</tr>
							<?php
								include 'dbconnect/dbconnect.php';
								$select = "SELECT * FROM contactus";
								$result = $link->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><h6><?php echo $row['name'] ?></h6></td>
								<td><h6><?php echo $row['email'] ?></h6></td>
								<td><h6><?php echo $row['mobile'] ?></h6></td>
								<td><h6><?php echo $row['message'] ?></h6></td>
								
								<td><h6><a href="javascript:sureToApprove(<?php echo $row['id'];?>)" class="ico del">Delete</a></h6></td>
							</tr>
							<?php
								}
							?>
						</table>
						