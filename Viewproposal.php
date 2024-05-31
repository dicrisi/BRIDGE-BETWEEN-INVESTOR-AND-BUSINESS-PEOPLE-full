
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



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1>Proposal</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Id</font></th>
			<th bgcolor=Black><font color=white size=2>Request Id</font></th>
			<th bgcolor=Black><font color=white size=2>Business Id</font></th>
			<th bgcolor=Black><font color=white size=2>Business</font></th>
			<th bgcolor=Black><font color=white size=2>Proposal</font></th>
			<th bgcolor=Black><font color=white size=2>Investor Id</font></th>
			<th bgcolor=Black><font color=white size=2>Proposal Mail </font></th>
			<th bgcolor=Black><font color=white size=2>Business People Id</font></th>
			<th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from proposal where Busipeoid='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['P_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['R_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['B_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Business']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Proposaldesc']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Invesid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['pmail']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Busipeoid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="?delete=<?php echo $row['P_id'];?>"><font color="#0000FF">Delete</font></a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>




<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from proposal where P_id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Viewproposal.php");
	exit;
	}
include('footer.php');
?>
 

