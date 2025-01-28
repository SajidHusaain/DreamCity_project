<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<?php
include("function.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
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
	.main_container{
		margin: 0 auto;
		width: 85%;
		height: auto;
	}
	.data{
		margin: 0 auto;
		width: 100%;
		height: 600px;
        background: rgba(0,0,0,0.2);
        border-radius: 10px;
	}
	.heading{
		margin: 0 auto;
		width: 100%;
		height: 100px;
    background:#C4A277;
    border-top-right-radius: 10px;
   border-top-left-radius: 10px;
	}
	.showresult{
		margin: 0 auto;
		width: 100%;
		height: 500px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px
	}
	/*Scroll Bar*/
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

 /*main*/
	</style>
</head>
<body>	
<!-- Main Container Start-->
<div class="main_container">
<!-- click here Start button-->
<div style="width: 100%;height: 90px">
<center>
<a href="home.php"><img src="images/back.png" width="40" height="40" style="float: left;"></a>
<p style="font-size: 50px;text-decoration: underline;color: white; text-align: center; margin: 12px 9px 13px 0px;margin-right: 70px">Dream City Karachi</p><div style="margin-left: 80%;margin-top: -60px"><button class="button_darkblue"><a href="add_slip3_record.php" style="text-decoration: none; color: white;">Click Here To ADD Record</a></button></div></center>
</div>
<center><h3><?php echo @$_GET['update'];?></h3></center>
<div class="data">
<div class="heading">
<center>
<table cellpadding="10" cellspacing="10" width="100%">
  <tr style="font-size: 20px;">
    <th>SHARE MONEY</th>
    <th>RS1</th>
    <th>MEMBERSHIP FEES</th>
    <th>RS2</th>
    <th>TOTAL</th>
    <th>EDIT</th>
    <th>DELETE</th>
    <th>DETAILS</th>
  </tr>

</table>
</center>
</div>	
<div class="showresult">
<div class="chatbox">
<div class="chatlogs">
	<div class="chat friend">
		<table cellpadding="10" cellspacing="10" border="1" width="100%" style="display: table-cell;">
        <?php
         getrecordslip3();
        ?>
        </table>
	</div>
</div>
</div>
</div>
</div>

<!-- click here end button-->
</div>
<!-- Main Container Ends -->
<!-- Footer Start-->
<?php include 'footer.php'; ?>
<!-- Footer Ends -->
</body>
</html>