<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<?php
include('db.php');

if (isset($_GET['updates'])) {
  $update_record=$_GET['updates'];
  global $link;
  $get_record="select * from site_plan where id='".$update_record."'";
  $run_get_record=mysqli_query($link,$get_record);
  while ($row_run_get_record=mysqli_fetch_array($run_get_record))
  {
    $edit_id=$row_run_get_record['id'];
    $SITE_PLAN_FOR_PLOT_NO=$row_run_get_record['plot_no'];
    $AREA_IN_SQ_YDS=$row_run_get_record['area_in_sq_yds'];
    $PROPERTY_TYPE=$row_run_get_record['property_type'];
    $DEMARCATED_BY=$row_run_get_record['demarcated_by'];
    $DRAWN_BY=$row_run_get_record['drawn_by'];
    $CHECKED_BY=$row_run_get_record['checked_by'];

  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    <h1>UPDATE DATA</h1>
 <?php
 if(isset($message)){
 echo "<p style='margin-left: 22%;text-align:center' class='message'>".$message."</p>";
 }else{
if(isset($error_message)){
  echo "<p style='margin-left: 22%;text-align:center' class='message'>".$error_message."</p>";
}else{
  echo "<p style='background:#FFFFF; width:350px;margin:0 auto'>Update Correct Data In The Form To Abstain From Updating Wrong Information In The Database.</p><br>";
}
}   ?>
<form method="post" action="update_slip1_record.php?edit_form=<?php echo $edit_id;?>">
          <table class="table1">
            <tbody><tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE SITE PLAN FOR PLOT NO.</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_plot_no" value="<?php echo $SITE_PLAN_FOR_PLOT_NO;?>"></td>
            </tr>
            <tr>
             <td><label style="color:#3a87ad; font-size:18px;">UPDATE PROPERTY TYPE</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_p_type" value="<?php echo $PROPERTY_TYPE;?>">
              </td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE AREA IN SQ. YDS.</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_area"  value="<?php echo $AREA_IN_SQ_YDS;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE DEMARCATED BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_demarcated" value="<?php echo $DEMARCATED_BY;?>" ></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE DRAWN BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_drawn" value="<?php echo $DRAWN_BY;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE CHECKED BY</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_check" value="<?php echo $CHECKED_BY;?>" ></td>
            </tr>
            <tr style="display: none">
                  <td>
                   <th> <label for="name">Address</label></th>
                <td><input type="text" id="address" name="address" />
                  </td>
                </tr>
                <tr><td><input type="submit" name="submit" class="button_darkblue" value="Update" style="height: 50px;left:50%;top: 20px;"></td></tr>
          </tbody></table>
          
    </form>
    </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
<?php
include("db.php");

if (isset($_POST['submit'])) {
  $edit_record1=$_GET['edit_form'];
  $update_plot_no=$_POST['u_plot_no'];
  $update_p_type=$_POST['u_p_type'];
  $update_area=$_POST['u_area'];
  $update_demarcated=$_POST['u_demarcated'];
  $update_drawn=$_POST['u_drawn'];
  $update_check=$_POST['u_check'];
  $query1='update site_plan set plot_no="'.$update_plot_no.'",property_type="'. $update_p_type.'",area_in_sq_yds="'.$update_area.'",demarcated_by="'.  $update_demarcated.'",drawn_by="'. $update_drawn.'",checked_by="'. $update_check.'" where id="'.$edit_record1.'"';
  if(mysqli_query($link,$query1)){
    echo '<script>window.open("slip1.php?update=your record has been updated!","_self")</script>';
    }
} 

?>