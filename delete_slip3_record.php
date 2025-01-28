<?php
include('db.php');

$delete_record=$_GET['del'];
$query='delete from registerd_letter where id='.$delete_record.'';
if(mysqli_query($link,$query)){
	echo '<script>alert("Record Deleted Successfully")</script>';
	header("Location:slip3.php");
	}

?>