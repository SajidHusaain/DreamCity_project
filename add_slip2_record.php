<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<?php
include('db.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$per_name=trim(filter_input(INPUT_POST,"p_name",FILTER_SANITIZE_STRING));
$swd_name=trim(filter_input(INPUT_POST,"swd_name",FILTER_SANITIZE_STRING));
$residing1=trim(filter_input(INPUT_POST,"res1",FILTER_SANITIZE_STRING));
$residing2=trim(filter_input(INPUT_POST,"res2",FILTER_SANITIZE_STRING));
$day=trim(filter_input(INPUT_POST,"dday",FILTER_SANITIZE_STRING));
$month=trim(filter_input(INPUT_POST,"mmonth",FILTER_SANITIZE_STRING));
$year=trim(filter_input(INPUT_POST,"yyear",FILTER_SANITIZE_STRING));
$error_message;
  if($per_name == "" || $swd_name =="" || $residing1 == ""|| $residing2 == ""|| $day == ""|| $month == "" || $year ==""){
    $error_message="Please Fill In The Required Fields";
  }

  if(!isset($error_message) && $_POST['address'] != ""){
    $error_message= "Bad Form Input";
  }
if(!isset($error_message)){
  $insert_query="insert into share_certificate values(null,'".$per_name."','".$swd_name."','".$residing1."','".$residing2."','".$day."','".$month."','".$year."')";
global $link;
$run_isert_query=mysqli_query($link,$insert_query);
if ($run_isert_query>0) {
  $message="Record Inserted Successfully";
}
else{
  $error_message="Record Insertion Failed";
}
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
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
		width: 80%;
    margin-left: auto;
    margin-right: auto;
		height: auto;
	}
		.data{
		margin: 0 auto;
		width: 100%;
		height: 450px;
        background: rgba(0,0,0,0.2);
        border-radius: 10px;
	}
	.wrapper {width: 400px; margin: 0 auto;}
	.section.page:after {content:"";display:block;visibility:hidden;height:0;clear:both;}
.section.page h1 {
    font-size: 24px;
    text-align: center;
    line-height: 1.6;
    font-weight: normal;
}
.section.page .media-details h1 {
    text-align: left;
}
.section.page p {width: 475px; margin-right: auto; }
.section.page .media-details h1 .price {color: #9d9f4e; padding-right: 10px; font-size: 34px;}
form{margin-left: 28%}
select{border: 2px grey solid ;border-radius: 5px;width: 195px;height: 28px}
input{border: 2px grey solid ;border-radius: 5px;width: 180px;height: 25px;padding-left: 10px}
	</style>
</head>
<body>
<div class="main_container">
<br>
<div class="data">
<a href="slip2.php"><img src="images/back.png" width="40" height="40" style="position: absolute;left:11%;top:42px"></a>
<div class="section page">
    <div class="wrapper">
    <h1>ADD DATA</h1>
 <?php
 if(isset($message)){
 echo "<p style='margin-left: 22%;text-align:center' class='message'>".$message."</p>";
 }else{
if(isset($error_message)){
  echo "<p style='margin-left: 22%;text-align:center' class='message'>".$error_message."</p>";
}else{
  echo "<p style='background:#FFFFF; width:350px;margin:0 auto'>Insert Correct Data In The Form To Abstain From Inserting Wrong Information In The Database.</p><br>";
}
}   ?>
<form method="post">
          <table class="table1">
            <tbody><tr>
              <td><label style="color:#3a87ad; font-size:18px;">PERSON NAME</label></td>
              <td width="5"></td>
              <td><input type="text" name="p_name" value="<?php if(isset($per_name)){echo $per_name;} ?>" placeholder="Enter Name..."></td>
            </tr>
            <tr>
            <td><label style="color:#3a87ad; font-size:18px;">S/O,D/O,W/O</label></td>
              <td width="5"></td>
             <td><input type="text" name="swd_name" value="<?php if(isset($swd_name)){echo $swd_name;} ?>" placeholder="Enter s/o,d/o,w/o..."></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">RESIDING1</label></td>
              <td width="5"></td>
              <td><input type="text" name="res1" value="<?php if(isset($residing1)){echo $residing1;} ?>" placeholder="Enter Residing..."></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">RESIDING2</label></td>
              <td width="5"></td>
              <td><input type="text" name="res2" value="<?php if(isset($residing2)){echo $residing2;} ?>" placeholder="Enter Residing..."></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">DAY</label></td>
              <td width="5"></td>
              <td><input type="text" name="dday" value="<?php if(isset($day)){echo $day;} ?>" placeholder="Enter Day..."></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">MONTH</label></td>
              <td width="5"></td>
              <td><input type="text" name="mmonth" value="<?php if(isset($month)){echo $month;} ?>" placeholder="Enter Month..."></td>
            </tr>
            <tr style="display: none">
                  <td>
                   <th> <label for="name">Address</label></th>
                <td><input type="text" id="address" name="address" />
                  </td>
                </tr>
             <tr>
              <td><label style="color:#3a87ad; font-size:18px;">YEAR</label></td>
              <td width="5"></td>
              <td><input type="text" name="yyear" value="<?php if(isset($year)){echo $year;} ?>" placeholder="Enter Year..."></td>
            </tr>
                <tr><td><input type="submit" name="submit" class="button_darkblue" value="Insert" style="height: 50px;left:50%;top: 20px;"></td></tr>
          </tbody></table>
          
    </form>
    </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>