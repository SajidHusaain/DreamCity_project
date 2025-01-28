<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name=$_POST['username'];
$pass=$_POST['pwd'];
$sql="select * from users where username='$name' and password='$pass'";
$result=mysqli_query($link,$sql);
		$queryresult=mysqli_num_rows($result);
		if($queryresult > 0)
		{
			while($row=mysqli_fetch_assoc($result)){
				$_SESSION['username']=$name;
	header("Location:home.php");
	echo '<script>alert("You Are Succesfully Logged In")</script>';
}
}else{
	header("Location:index.php?error=Wrong Username Or Password");
	
}
}
?>