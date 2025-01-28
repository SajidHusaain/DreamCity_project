<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Privisonal</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    input{
         border:none;border-bottom: ridge;
         text-align: center;
    }
</style>
<script type="text/javascript">
function myFunction() {
	var button=document.getElementById('print');
	button.style.display = "none";
    window.print();
}
var P = new print();
</script>
</head>
<?php
include("db.php");

if (isset($_GET['details'])) {
    $detail_record=$_GET['details'];
    global $link;
    $get_record="select * from provisional_allotment_order where id='".$detail_record."'";
    $run_get_record=mysqli_query($link,$get_record);
    while ($row_run_get_record=mysqli_fetch_array($run_get_record))
    {
        $NO=$row_run_get_record['no'];
        $DATE=$row_run_get_record['dates'];
        $MEMBERSHIP_NO=$row_run_get_record['member_ship_no'];
        $PLOT_NO=$row_run_get_record['plot_no'];
        $SQ_YARD=$row_run_get_record['sq_yard'];
        $NAME=$row_run_get_record['person_name'];
        $MMMS=$row_run_get_record['father_mother_name'];
        $APPLICATION_DATE=$row_run_get_record['application_date'];
        $CNIC=$row_run_get_record['nic_no'];

    }
}
?>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center>
<form action="certificate.php" method="post">
<h3 style="color: #8394C9">PROVISIONAL ALLOTMENT ORDER</h3>
<table cellspacing="10">
<tr>
<td >
<label>No.</label> 
<input type="text" name="name" value="<?php echo $NO;?>" readonly="">
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<label>Dated.</label> 
<input type="text" name="name" value="<?php echo $DATE;?>" readonly="">
<br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<label>Member Ship No.</label> 
<input type="text" name="name" value="<?php echo $MEMBERSHIP_NO?>" readonly="">

</td>
</tr>
<tr>
<td>
<label>Be it know that Plot Number </label> 
<input type="text" name="relation" value="<?php echo  $PLOT_NO;?>" readonly="">
<label>of about </label> 
<input type="text" name="relation" value="<?php echo $SQ_YARD;?>" readonly="">
<label>Sq. Yds</label>
</td>
</tr>
<tr>
<td>
<label>InTHE KARACHI DREAM CITY at Gulistan-e-Jauhar Block-16 SHUMAIL HEAVEN is allotted to</label> 
</td>
</tr>
<tr>
<td>
<label>Mr./Mrs./Miss.</label> 
<input type="text" name="reside2" value="<?php echo  $NAME;?>" readonly="" style="width: 560px">
</td>
</tr>
<tr>
<td>
<label>W/o,S/o,D/o</label> 
<input type="text" name="reside2" value="<?php echo $MMMS;?>" readonly="" style="width: 575px">
</td>
</tr>
<tr>
<td>
<label>On his/her application dated</label> 
<input type="text" name="reside2" value="<?php echo $APPLICATION_DATE;?>" readonly="">
<label>subjact to the terms condition laid down in the</label>
</td>
</tr>
<tr>
<td>
<label>Registered Rules bye-laws and application from of the Society, or as may be laid down from time to time.</label>
</td>
</tr>
<tr>
<td>
<label >The &nbsp Construction &nbsp will &nbsp have &nbsp to &nbsp be &nbsp made &nbsp according &nbsp to &nbsp the &nbsp plan &nbsp approved &nbsp by &nbsp the &nbsp Socity.</label>
</td>
</tr>
<tr>
<td>
<label>It &nbsp is &nbsp hereby &nbsp further &nbsp informed &nbsp that &nbsp Society's &nbsp time &nbsp to time demand &nbsp in respect &nbsp of &nbsp the said &nbsp plot</label>
</td>
</tr>
<tr>
<td>
<label>Internal/External &nbsp charges &nbsp shall &nbsp have &nbsp to &nbsp be &nbsp paid &nbsp with &nbsp in &nbsp the &nbsp stipulated &nbsp time, In case of default </label>
</td>
</tr>
<tr>
<td>
<label>payment &nbsp of &nbsp three &nbsp consecutive &nbsp installment &nbsp in respect &nbsp of the &nbsp said plot  on due dates, this allotment </label>
</td>
</tr>
<tr>
<td>
<label>will be cancelled without Notice. </label>
</td>
</tr>
<tr>
<td>
<label>Member's Signature </label>
<input type="text" name="reside2" value="" readonly="">
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp


<label>Chairman Signature </label>
<input type="text" name="reside2" value="" readonly="">
</td>
</tr>

<tr>
<td>
<label>N.I.C No. </label>
<input type="text" name="reside2" value="<?php echo $CNIC;?>" readonly="" style="width: 235px">
    </td>

</tr>
<tr>
<td>
<label>Secretary's Signature </label>
<input type="text" name="reside2" value="" readonly="">
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<label>For</label><label style="        font-size: 20px;
        font-weight: bold;
        font-size: 40px;
        font-family:Kunstler Script;">Karachi Dream City</label><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
        <label style="font-size: 15px;
        font-weight: bold;
        font-family:Kunstler Script;">Multipurpose Co-Operative Socity Ltd.Karachi</label>

</td>
</tr>


</center>
</table>
<br />
<input  id="print" value="Print" class="button_purple" style="width: 120px;font-size: 20px" onclick="myFunction()">
</form>
</body>
</html>