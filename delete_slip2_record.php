<?php
include('db.php');

$delete_record=$_GET['del'];
$query='delete from share_certificate where id='.$delete_record.'';
if(mysqli_query($link,$query)){
	echo '<script>alert("Record Deleted Successfully")</script>';
	header("Location:slip2.php");
	}

?>