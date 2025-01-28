
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
<title>Certificate</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    label{
        font-family:Kunstler Script;
        font-size: 20px;
        font-weight: bold;
    }
    input{
         border:none;border-bottom: ridge;
         text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-family:Kunstler Script;
         
    }
  /*  table{
    	border-top:solid;
    	border-bottom:solid;
    	border-left:solid;
    	border-right:solid;
    }*/
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
    $get_record="select * from share_certificate where id='".$detail_record."'";
    $run_get_record=mysqli_query($link,$get_record);
    while ($row_run_get_record=mysqli_fetch_array($run_get_record))
    {
        $PERSON_NAME=$row_run_get_record['person_name'];
        $SDW=$row_run_get_record['father_name'];
        $RESIDING1=$row_run_get_record['residing1'];
        $RESIDING2=$row_run_get_record['residing2'];
         $DAY=$row_run_get_record['day'];
          $MONTH=$row_run_get_record['month'];
           $YEAR=$row_run_get_record['year'];

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

<table cellspacing="15">
<tr>
<td>
<label>
<h1 style="color: #8394C9; text-align: center;">Share Certificate Of Rs 100/- each</h1>
</label>
</td>
</tr>
<tr>
<td>
<label>This is to Certify that Mr/Mrs/Miss</label> 
<input type="text" name="name" value="<?php echo $PERSON_NAME;?>"  readonly="" style="width: 400px">
</td>
</tr>
<tr>
<td>
<label>Son/Wife/Daughter Of</label> 
<input type="text" name="relation" value="<?php echo  $SDW;?>"  readonly="" style="width: 465px">
</td>
</tr>
<tr>
<td>
<label>Residing at</label> 
<input type="text" name="reside1" value="<?php echo $RESIDING1?>"  readonly="" style="width: 550px">
</td>
</tr>
<tr>
<td>
<label>Residing at</label> 
<input type="text" name="reside2" value="<?php echo $RESIDING2?>" placeholder="Reisde at" readonly="" style="width: 550px">
</td>
</tr>
<tr>
<td>
<label>is the registered holder of one share of Rupees One in the</label>
</td>
</tr>
<tr>
<td>
<label>Given undedr the Common Seal of the Society at Karachi</label> 
</td>
</tr>
<tr>
<td>
<label>this</label>
<input type="text" name="day" value="<?php echo $DAY;?>"  readonly="" style="width: 90px" >
<label>day of</label><input type="text" name="month" value="<?php echo $MONTH;?>"  readonly="" style="width: 90px"><label>20</label><input type="text" name="Year" value="<?php echo $YEAR;?>" readonly="" style="width: 90px">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<label style="        font-size: 20px;
        font-weight: bold;
        font-size: 40px;
        font-family:Kunstler Script;">Karachi Dream City</label><br/>
&nbsp
&nbsp




        <label style="font-size: 15px;
        font-weight: bold;
        font-family:Kunstler Script;">Multipurpose Co-Operative Socity Ltd.Karachi</label>
        
        <img src="images/ribbin.png" width="130" height="130" style="position: absolute; margin-top: -80px;margin-left: 70px">

</td>
</tr>
<tr>
    <td>
    <br/>
<br/>
<br/><label style="font-size: 25px;">Common Seal of the Spciety &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp Secretry &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp Chairman </label></td>
</tr>
</center>
</table>
<br />
<input  id="print" value="Print" class="button_purple" style="width: 120px;font-size: 20px" onclick="myFunction()">
</form>
</body>
</html>