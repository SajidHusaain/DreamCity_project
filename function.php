<?php
include('db.php');


function getrecordslip1()
{
    global $link; 
	$get_record="select * from site_plan";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
	echo '<tr style="font-size:18px; text-align:center;">';
	//echo '<td>'.$row_run_get_record['id'].'</td>';
	$id=$row_run_get_record['id'];
	echo '<td width="35%">'.$row_run_get_record['plot_no'].'</td>';
	echo '<td width="25%">'.$row_run_get_record['property_type'].'</td>';
   	echo '<td width="25%">'.$row_run_get_record['area_in_sq_yds'].'</td>';
	echo '<td width="35%">'.$row_run_get_record['demarcated_by'].'</td>';
	echo '<td width="35%">'.$row_run_get_record['drawn_by'].'</td>';
	echo '<td width="35%">'.$row_run_get_record['checked_by'].'</td>';
	echo '<td width="35%"><a class="button_darkblue" href="update_slip1_record.php?updates='.$id.'">Edit</a></td>';
	echo '<td width="35%"><a class="button_darkred" href="delete_slip1_record.php?del='.$id.'">Delete</a></td>';
	echo '<td width="35%"><a class="button_orange" href="siteplan.php?details='.$id.'">Details</a></td>';
	echo '</tr>';
		}
}



function getrecordslip2()
{
    global $link; 
	$get_record="select * from share_certificate";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
	echo '<tr style="font-size:18px; text-align:center;">';
	//echo '<td>'.$row_run_get_record['id'].'</td>';
	$id=$row_run_get_record['id'];
	echo '<td width="10%">'.$row_run_get_record['person_name'].'</td>';
	echo '<td width="15%">'.$row_run_get_record['father_name'].'</td>';
   	echo '<td width="15%">'.$row_run_get_record['residing1'].'</td>';
	echo '<td width="15%">'.$row_run_get_record['residing2'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['day'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['month'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['year'].'</td>';
	echo '<td width="35%"><a class="button_darkblue" href="update_slip2_record.php?updates='.$id.'">Edit</a></td>';
	echo '<td width="35%"><a class="button_darkred" href="delete_slip2_record.php?del='.$id.'">Delete</a></td>';
	echo '<td width="35%"><a class="button_orange" href="certificate.php?details='.$id.'">Details</a></td>';
	echo '</tr>';
		}
}




function getrecordslip3()
{
    global $link; 
	$get_record="select * from registerd_letter";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
	echo '<tr style="font-size:18px; text-align:center;">';
	//echo '<td>'.$row_run_get_record['id'].'</td>';
	$id=$row_run_get_record['id'];
	echo '<td width="22%">'.$row_run_get_record['share_money'].'</td>';
	echo '<td width="15%">'.$row_run_get_record['rs1'].'</td>';
   	echo '<td width="15%">'.$row_run_get_record['membership_fees'].'</td>';
	echo '<td width="15%">'.$row_run_get_record['rs2'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['total'].'</td>';
	echo '<td width="35%"><a class="button_darkblue" href="update_slip3_record.php?updates='.$id.'">Edit</a></td>';
	echo '<td width="35%"><a class="button_darkred" href="delete_slip3_record.php?del='.$id.'">Delete</a></td>';
	echo '<td width="35%"><a class="button_orange" href="member.php?details='.$id.'">Details</a></td>';
	echo '</tr>';
		}
}




function getrecordslip4()
{
    global $link; 
	$get_record="select * from provisional_allotment_order";
	$run_get_record=mysqli_query($link,$get_record);
	while ($row_run_get_record=mysqli_fetch_array($run_get_record))
	{
	echo '<tr style="font-size:18px; text-align:center;">';
	//echo '<td>'.$row_run_get_record['id'].'</td>';
	$id=$row_run_get_record['id'];
	echo '<td width="3%">'.$row_run_get_record['no'].'</td>';
	echo '<td width="8%">'.$row_run_get_record['dates'].'</td>';
   	echo '<td width="15%">'.$row_run_get_record['member_ship_no'].'</td>';
   	echo '<td width="15%">'.$row_run_get_record['plot_no'].'</td>';
   	echo '<td width="15%">'.$row_run_get_record['sq_yard'].'</td>';

	echo '<td width="15%">'.$row_run_get_record['person_name'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['father_mother_name'].'</td>';
	echo '<td width="35%">'.$row_run_get_record['application_date'].'</td>';
	echo '<td width="10%">'.$row_run_get_record['nic_no'].'</td>';
	echo '<td width="35%"><a class="button_darkblue" href="update_slip4_record.php?updates='.$id.'">Edit</a></td>';
	echo '<td width="35%"><a class="button_darkred" href="delete_slip4_record.php?del='.$id.'">Delete</a></td>';
	echo '<td width="35%"><a class="button_orange" href="privisonal.php?details='.$id.'">Details</a></td>';
	echo '</tr>';
		}
}
?>