
<?php
include('Investorheader.php');
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

<h1>Business Idea</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Id</font></th>
			<th bgcolor=Black><font color=white size=2>Business name</font></th>
			<th bgcolor=Black><font color=white size=2>Investment Amount</font></th>
			<th bgcolor=Black><font color=white size=2>Requirements</font></th>
			<th bgcolor=Black><font color=white size=2>Profit</font></th>
			<th bgcolor=Black><font color=white size=2>Business Uid</font></th>
			<th bgcolor=Black><font color=white size=2>Select</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from businessidea";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Businessname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Investment']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Requirements']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Profit']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="Sendrequest.php?Add=<?php echo $row['id'];?>"><font color="#0000FF">Send Request</font></a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

			 	         		
	$query = "INSERT INTO `businessidea`"; 
	$query .= " VALUES ('null','".$_POST['t1']."','".$_POST['t2']."', '".$_POST['t3']."', '";
	$query .=  $_POST['t4']."','".$_SESSION['login_user']."')";
         
		//  echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
header("location:Addidea.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from businessidea where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addidea.php");
	exit;
	}
include('footer.php');
?>
 

