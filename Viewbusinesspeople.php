<?php
include('Adminheader.php');
include_once("config.php");  
?>
<body>

<div align="center">




<form action="" name="register"  id="register" method="post">
	
<h1>Business People Details</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #000080;" align="center">
	<tr>
			<th bgcolor=Black><font color=white size=2>Full Name</font></th>
			<th bgcolor=Black><font color=white size=2>User Id</font></th>
			<th bgcolor=Black><font color=white size=2>Email id</font></th>
			<th bgcolor=Black><font color=white size=2>Address</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
		
			  
	</tr>
	
	<?php
	
	$query = "select * from businesspeople";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['fname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['email_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['address']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['mobile']; ?></font></td>
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>



<?php


include('footer.php');
?>
 



	</body>
  