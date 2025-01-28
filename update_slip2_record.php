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
  $get_record="select * from share_certificate where id='".$update_record."'";
  $run_get_record=mysqli_query($link,$get_record);
  while ($row_run_get_record=mysqli_fetch_array($run_get_record))
  {
    $edit_id=$row_run_get_record['id'];
    $PERSON_NAME=$row_run_get_record['person_name'];
    $S_w_d_name=$row_run_get_record['father_name'];
    $RESIDING1=$row_run_get_record['residing1'];
    $RESIDING2=$row_run_get_record['residing2'];
    $DAY=$row_run_get_record['day'];
    $MONTH=$row_run_get_record['month'];
    $YEAR=$row_run_get_record['year'];

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
<form method="post" action="update_slip2_record.php?edit_form=<?php echo $edit_id;?>">
          <table class="table1">
            <tbody><tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE PERSON NAME</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_p_name" value="<?php echo $PERSON_NAME;?>"></td>
            </tr>
            <tr>
            <td><label style="color:#3a87ad; font-size:18px;">UPDATE S/O,D/O,W/O</label></td>
              <td width="5"></td>
             <td><input type="text" name="u_swd_name" value="<?php echo $S_w_d_name;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE RESIDING1</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_res1" value="<?php echo $RESIDING1;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE RESIDING2</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_res2" value="<?php echo $RESIDING2;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE DAY</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_dday" value="<?php echo $DAY;?>"></td>
            </tr>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE MONTH</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_mmonth" value="<?php echo $MONTH;?>"></td>
            </tr>
            <tr style="display: none">
                  <td>
                   <th> <label for="name">Address</label></th>
                <td><input type="text" id="address" name="address" />
                  </td>
                </tr>
             <tr>
              <td><label style="color:#3a87ad; font-size:18px;">UPDATE YEAR</label></td>
              <td width="5"></td>
              <td><input type="text" name="u_yyear" value="<?php echo $YEAR;?>"></td>
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
  $update_person=$_POST['u_p_name'];
  $update_swd=$_POST['u_swd_name'];
  $update_res1=$_POST['u_res1'];
  $update_res2=$_POST['u_res2'];
  $update_day=$_POST['u_dday'];
  $update_month=$_POST['u_mmonth'];
  $update_year=$_POST['u_yyear'];
  $query1='update share_certificate set person_name="'.$update_person.'",father_name="'. $update_swd.'",residing1="'.$update_res1.'",residing2="'.$update_res2.'",day="'.$update_day.'",month="'. $update_month.'",year="'. $update_year.'"  where id="'.$edit_record1.'"';
  if(mysqli_query($link,$query1)){
    echo '<script>window.open("slip2.php?update=your record has been updated!","_self")</script>';
    }
} 

?>