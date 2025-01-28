<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<?php 
include 'db.php';
function search(){
					global $link;
    		if(!isset($_POST['search'])){$get_record="select * from site_plan";
			$run_get_record=mysqli_query($link,$get_record);
			while ($row_run_get_record=mysqli_fetch_array($run_get_record))
				{
		echo '<tr style="font-size:22px;">';
		//echo '<td>'.$row_run_get_record['id'].'</td>';
		echo "<td>".$row_run_get_record['plot_no']."</td><td>".$row_run_get_record['property_type']."</td><td>".$row_run_get_record['area_in_sq_yds']."</td><td>".$row_run_get_record['demarcated_by']."</td><td>".$row_run_get_record['drawn_by']."</td><td>".$row_run_get_record['checked_by']."</td></tr>";
		}}
		if(isset($_POST['search'])){
		$search=mysqli_real_escape_string($link,$_POST['search']);
		$sql="select * from  site_plan where demarcated_by like '%$search%' OR plot_no like '%$search%'";
		$result=mysqli_query($link,$sql);
		$queryresult=mysqli_num_rows($result);
		//echo "<h2 class='message' style='margin:0 auto;'>There are ".$queryresult."results!</h2>";
		
		if($queryresult > 0)
		{
			while($row_run_get_record=mysqli_fetch_assoc($result)){
		echo "<tr style='font-size:22px;'>";
	echo "<td>".$row_run_get_record['plot_no']."</td><td>".$row_run_get_record['property_type']."</td><td>".$row_run_get_record['area_in_sq_yds']."</td><td>".$row_run_get_record['demarcated_by']."</td><td>".$row_run_get_record['drawn_by']."</td><td>".$row_run_get_record['checked_by']."</td></tr>";
		}
		}else{
			echo "There are no results matching your search!";
		}	
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
html{ height:100%;  background:  url(images/b.png) no-repeat center center fixed;
    background-size: cover; }
 .main_container{
  margin: 0 auto;
  width: 80%;
  height: auto;
 }
  body{ min-height:100%; padding:0; margin:0; position:relative; }
  body::after{ content:''; display:block; height:100px; }	
 	.data{
		margin: 0 auto;
		width: 100%;
		height: 600px;
        background: rgba(0,0,0,0.2);
        border-radius: 10px;
	}
	input{
	padding: 0px 20px;
	widows: 300px;
	height: 40px;
	font-size: 22px;
}
.chatbox{
		width:100%;
		height:100%;
	}

	.chatlogs{
		width: 100%;
		height: 100%;
		overflow-x:hidden;
		overflow-y:scroll;
	}
	.chatlogs::-webkit-scrollbar{
		width:10px;
	}
	.chatlogs::-webkit-scrollbar-thumb{
		border-radius:5px;
		background:white;
	}
	.chat{
		display: flex;
		flex-flow:  row wrap;
		align-items: flex-start;
		margin-bottom: 10px;
	}
	.chat .user-photo{
		width: 60px;
		height: 60px;
		background:  #ccc;
		border-radius: 50%;
		overflow:hidden;
	}
	.chat .user-photo img{
		width:100%;
	}
	.chat .chat-message{
		width: 80%;
		padding: 15px;
		margin: 5px 10px 0;
		/*background: #1ddced;*/
		border-radius: 10px;
		color:white;
		font-size:10px;
	}
	.friend .chat-message{
		/*background:#1adda4;*/
		font-size: 20px;
	}
	.self .chat-message{
		/*background: #1ddced;*/
		order:-1;
	}
	h2{
		font-family: 'Pacifico', cursive;
	}
</style>
<body>
<div class="main_container">
<div class="data">
<a href="home.php"><img src="images/back.png" width="40" height="40" style="position: absolute;left:11%;top:15px"></a>
<center>
<form method="post" action="search.php">
<input type="text" name="search" placeholder="Search" style="margin-top: 20px"><button type="submit" name="submit" class="button_lightblue" style="padding: 0px 20px;
	widows: 300px;
	height: 40px;
	font-size: 22px;margin-left: 30px">Search</button>
<br />
<br />
<div style="width: 100%; height: 85%; border-radius: 10px; margin-top: 10px; color: white; margin-left: 2px;">
	

	<div style="width: 100%; height: 100%;  border-radius: 20px; float: left;" class="chatbox">
			<div class="chatlogs">
			<div class="chat friend">
				<table align="center" style="margin-top: 20px; font-size: 18px; text-align: center;" border="0" cellspacing="10" cellpadding="3" >
	<tr><th>Plot No</th><th>Property Type</th><th>Area In Sq Yds</th><th>Demarcated By</th><th>Drawn By</th><th>Checked By
</th></tr>
		<?php search();?>
								
					
				</table>
				</form>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</center>
<?php include 'footer.php' ?>
</body>
</html>