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
<title>Member</title>
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
	$get_record="select * from registerd_letter where id='".$detail_record."'";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
		$SHARE_MONEY=$row_run_get_record['share_money'];
		$RS1=$row_run_get_record['rs1'];
		$MEMBERSHIP_FEES=$row_run_get_record['membership_fees'];
		$RS2=$row_run_get_record['rs2'];
		$TOTAL=$row_run_get_record['total'];

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
<table cellspacing="20">
<tr>
<td >
<label>To,</label> 
</td>
</tr>
<tr>
<td >
<label>The Secretary,</label> 
</td>
</tr>
<tr>
<td >
<label>Multipurpose Co-Operative Socity Ltd. Karachi</label> 
</td>
</tr>
<tr>
<td >
<label>Sir,</label> 
</td>
</tr>
<tr>
<td >
<label>Iwish to become a member of Karachi Dream City, Multipurpose Co-Operative Society Ltd. Karachi </label> 
</td>
</tr>
<tr>
<td >
<label>Therefore Iam Submitting here with a sum of Rs.300/-Only.</label> 
</td>
</tr>
<tr>
<td >
<label>1- Share money for one share<input type="" name="" style="border:none;border-bottom: dotted;">Rs<input type="text" value="<?php echo $RS1;?>" name="" style="border:none;border-bottom: dotted;">100.00 </label> 
</td>
</tr>
<tr>
<td >
<label>2- Membership Admission Fee<input type="text" value="" name="" style="border:none;border-bottom: dotted;">Rs<input type="text" value="<?php echo $RS2;?>" name="" style="border:none;border-bottom: dotted;">200.00</label> 
</td>
</tr>
<tr>
<td >
<label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Total<input type="" name="" value="<?php echo $TOTAL;?>" style="border:none;border-bottom: dotted;">300.00</label> 
</td>
</tr>
<tr>
<td >
<label>I declare that, Ishall willing and faith fully abides by rules, I accept and agree to abide by</label> 
</td>
</tr>
<tr>
<td >
<label>all existing rules and bye-laws with amendments there of asmay be made be made time to time by the</label> 
</td>
</tr>
<tr>
<td >
<label>society and I further agree that any charge i.e. Home Address, Phone number,Name of nominee,
</label> 
</td>
</tr>
<tr>
<td >
<label>will inform in my first priority. I further declare that information declared in column 7 and 8 are
</label> 
</td>
</tr>
<tr>
<td >
<label>true. Demands in respect of general heads i.e. Cost of land, outer development charges, inner
</label> 
</td>
</tr>
<tr>
<td >
<label>Connection Charges etc. Will be follows as per society schedule.
</label> 
</td>
</tr>
<tr>
<td >
<input type="text" name="name" value="" readonly="">
</td>
</tr>

<tr>
<td >
<label>Acceptance by the Member
</label> 
</td>
</tr>

</center>
</table>
<br />
<input  id="print" value="Print" class="button_purple" style="width: 120px;font-size: 20px" onclick="myFunction()">
</form>
</body>
</html>