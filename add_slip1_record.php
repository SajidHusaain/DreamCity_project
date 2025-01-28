<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<?php
include('db.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$plot_no=trim(filter_input(INPUT_POST,"plot_no",FILTER_SANITIZE_STRING));
$p_type=trim(filter_input(INPUT_POST,"p_type",FILTER_SANITIZE_STRING));
$area=trim(filter_input(INPUT_POST,"area",FILTER_SANITIZE_STRING));
$demarcated=trim(filter_input(INPUT_POST,"demarcated",FILTER_SANITIZE_STRING));
$drawn=trim(filter_input(INPUT_POST,"drawn",FILTER_SANITIZE_STRING));
$check=trim(filter_input(INPUT_POST,"check",FILTER_SANITIZE_STRING));
$error_message;
  if($plot_no == "" || $p_type =="" || $area == ""|| $demarcated == ""|| $drawn == ""|| $check == ""){
    $error_message="Please Fill In The Required Fields";
  }

  if(!isset($error_message) && $_POST['address'] != ""){
    $error_message= "Bad Form Input";
  }
if(!isset($error_message)){
  $insert_query="insert into site_plan values(null,'".$plot_no."','".$p_type."','".$area."','".$demarcated."','".$drawn."','".$check."')";
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
<a href="slip1.php"><img src="images/back.png" width="40" height="40" style="position: absolute;left:11%;top:42px"></a>
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
              <td><label style="color:#3a87ad; font-size:18px;">SITE PLAN FOR PLOT NO.</label></td>
              <td width="5"></td>
              <td><input type="text" name="plot_no" value="<?php if(isset($plot_no)){echo $plot_no;} ?>" placeholder="Plot Number..."></td>
            </tr>
            <tr>
             <td><label style="color:#3a87ad; font-size:18px;">PROPERTY TYPE</label></td>
              <td width="5"></td>
              <td><select name="p_type">
              <option value="select_option">Select Option...</option>
              <option value="residential"<?php if(isset($p_type) && $p_type == "residential"){echo "selected";}?>>Residential</option>
              <option value="commercial"<?php if(isset($p_type) && $p_type == "commercial"){echo "selected";}?>>Commercial</option>
              </select>
              </td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">AREA IN SQ. YDS.</label></td>
              <td width="5"></td>
              <td><input type="text" name="area" value="<?php if(isset($area)){echo $area;} ?>" placeholder="Address"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">DEMARCATED BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="demarcated" value="<?php if(isset($demarcated)){echo $demarcated;} ?>" placeholder="Email"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">DRAWN BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="drawn" value="<?php if(isset($drawn)){echo $drawn;} ?>" placeholder="Email"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">CHECKED BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="check" value="<?php if(isset($check)){echo $check;} ?>" placeholder="Address"></td>
            </tr>
            <tr style="display: none">
                  <td>
                   <th> <label for="name">Address</label></th>
                <td><input type="text" id="address" name="address" />
                  </td>
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