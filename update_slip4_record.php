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
  $get_record="select * from provisional_allotment_order where id='".$update_record."'";
  $run_get_record=mysqli_query($link,$get_record);
  while ($row_run_get_record=mysqli_fetch_array($run_get_record))
  {
    $edit_id=$row_run_get_record['id'];
    $UPDATE_NO=$row_run_get_record['no'];
    $UPDATE_DATE=$row_run_get_record['dates'];
    $UPDATE_MEMBERSHIP_NO=$row_run_get_record['member_ship_no'];
    $UPDATE_PLOT_NO=$row_run_get_record['plot_no'];
    $UPDATE_SQUARE=$row_run_get_record['sq_yard'];
    $UPDATE_NAME=$row_run_get_record['person_name'];
    $UPDATE_MMM=$row_run_get_record['father_mother_name'];
    $UPDATE_APPLICATION_DATE  =$row_run_get_record['application_date'];
    $UPDATE_NIC_NO=$row_run_get_record['nic_no'];

  }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
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
<a href="slip4.php"><img src="images/back.png" width="40" height="40" style="position: absolute;left:11%;top:42px"></a>
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
<form method="post" action="update_slip4_record.php?edit_form=<?php echo $edit_id;?>">
          <table class="table1">
            <tbody><tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE NO</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_no" value="<?php echo $UPDATE_NO;?>"></td>
            </tr>
            <tr>
            <td><label style="color:#3a87ad; font-size:18px;">UPDATE DATE</label></td>
              <td width="5"></td>
             <td><input type="text" name="u_s_date" value="<?php echo $UPDATE_DATE;?>" ></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE MEMBERSHIP NO</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_member_no" value="<?php echo $UPDATE_MEMBERSHIP_NO;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE PLOT NO</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_plot_no" value="<?php echo $UPDATE_PLOT_NO;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE AREA SQUARE</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_sq_yards" value="<?php echo $UPDATE_SQUARE;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE NAME</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_names" value="<?php echo $UPDATE_NAME;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE MR/MRS/MISS</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_mms" value="<?php echo $UPDATE_MMM;?>"></td>
            </tr>
          
             <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE APPLICATION DATE</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_application" value="<?php echo $UPDATE_APPLICATION_DATE;?>" ></td>
            </tr>
              <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE C.NIC NO</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_cnic" value="<?php echo $UPDATE_NIC_NO;?>"></td>
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
  $up_no=$_POST['u_no'];
  $up_date=$_POST['u_s_date'];
  $up_members=$_POST['u_member_no'];
  
  $up_plot=$_POST['u_plot_no'];

  $up_square=$_POST['u_sq_yards'];
  $up_name=$_POST['u_names'];
  $up_mmm=$_POST['u_mms'];
  $up_application=$_POST['u_application'];
  $up_cnic=$_POST['u_cnic'];



  $query1='update provisional_allotment_order set no="'. $up_no.'",dates="'.$up_date.'",member_ship_no="'.$up_members.'",plot_no="'.$up_plot.'",sq_yard="'.$up_square.'",person_name="'. $up_name.'",father_mother_name="'.$up_mmm.'",application_date="'. $up_application.'",nic_no="'.$up_cnic.'"  where id="'.$edit_record1.'"';
  if(mysqli_query($link,$query1)){
    echo '<script>window.open("slip4.php?update=your record has been updated!","_self")</script>';
    }
} 

?>