
<?php
include('Businessheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #0000FF;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<br>


<h1>Request Details</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Id</font></th>
			<th bgcolor=Black><font color=white size=2>Business Id</font></th>
			<th bgcolor=Black><font color=white size=2>Business name</font></th>
			<th bgcolor=Black><font color=white size=2>Investment Amount</font></th>
			<th bgcolor=Black><font color=white size=2>Business People id</font></th>
			<th bgcolor=Black><font color=white size=2>Investor Id</font></th>
			<th bgcolor=Black><font color=white size=2>Select</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from businessrequest where Businessid='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['R_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Bid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Business']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Investment']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Businessid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Investorid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="Sendproposal.php?Add=<?php echo $row['R_id'];?>"><font color="#0000FF">Send Proposal</font></a></font></td>
		
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>



<?php


include('footer.php');
?>
 

