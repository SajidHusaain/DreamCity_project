<!DOCTYPE html>
<html>
<head>
	<title>Site Plan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		
		input{
			border: none;
			border-bottom: ridge;
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
	$get_record="select * from site_plan where id='".$detail_record."'";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
		$SITE_PLAN_FOR_PLOT_NO=$row_run_get_record['plot_no'];
		$AREA_IN_SQ_YDS=$row_run_get_record['area_in_sq_yds'];
		$DEMARCATED_BY=$row_run_get_record['demarcated_by'];
		$DRAWN_BY=$row_run_get_record['drawn_by'];

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
<div class="container">
<center>
<table cellspacing="15" height="580px">
<tr>
		<td><label>SITE PLAN FOR PLOT NO</label></td>
		<td><input type="text" name="PLOT" value="<?php echo $SITE_PLAN_FOR_PLOT_NO;?>" /></td>
		<td><label>FOR</label></td>
		<td><label>Residential</label><input type="checkbox"  name="rec"><br/><label>Commercial</label><input type="checkbox" name="rec"></td>

	</tr>
		<tr><td colspan="4" align="center"><h2 align="center">SITE PLAN<br/><br/><br/>
<br/><br/><br/></h2>
</td></tr>


	
		<tr>
		<td ><label>AREA IN SQ. YDS.</label></td>
		<td colspan="3"><input type="text" value="<?php echo $AREA_IN_SQ_YDS;?>" /></td>
	</tr>
		<tr>
		<td ><label>DEMARCATED BY</label></td>
		<td colspan="3"><input type="text"  value="<?php echo $DEMARCATED_BY;?>" /></td>
	</tr>
		<tr>
		<td ><label>DRAWN BY</label></td>
		<td colspan="3"><input type="text"  value="<?php echo $DRAWN_BY;?>" /></td>
	</tr>
		<tr>
		
		<td><input type="text" /><br/><label style="margin-left: 50px">SECRETARY</label></td>
		<td></td>
		<td></td>
		<td><input type="text" name="PLOT"/><br/><label style="margin-left: 30px">SITE ENGINEER</label></td>
	</tr>
</table>
</center>
</div>
<br>
<center>
<input  id="print" value="Print" class="button_purple" style="width: 120px;font-size: 20px" onclick="myFunction()">
</center>
</body>
</html>