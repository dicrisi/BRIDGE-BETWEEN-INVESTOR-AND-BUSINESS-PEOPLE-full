
<?php
include_once("config.php");
include('Investorheader.php');
error_reporting(0);

$query2 = "select * from businessidea where id=".$_GET['Add']."";
		//	echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
		}	

?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#Order_form").validate();
  });
</script>
<form action="" name="UserPaid_form"  id="UserPaid"  method="post">
	</br>	</br>	</br>	</br>
	<center>
	<tr>
		<th colspan="2" style="color: #000000">Send Request</th>
		<br>
	<tr>
	</center>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300">
	<caption></caption>
	
	
	<tr>
		<td class="col" style="color: #000000">Id:</td>
		<td><input type="text" name="t1"  value="<?php echo $row['id'] ?>"  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Business Name:</td>
		<td><input type="text" name="t2"  value="<?php echo $row['Businessname'] ?>"  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Investment:</td>
		<td><input type="text" name="t3" value="<?php echo $row['Investment'] ?>"  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Business People Id:</td>
		<td><input type="text" name="t4" value="<?php echo $row['Uid'] ?>"  style="color: #000000" class="required"  /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Investor Id:</td>
		<td><input type="text" name="t5" value="<?php  echo $_SESSION['login_user']; ?>"  style="color: #000000" class="required"  /></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Send"  style="color: #000000"/>
		     
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>


<?php

 //include_once("config.php");  



 if(isset($_POST['register']))
	 {

		 $query = "INSERT INTO `businessrequest` VALUES ('null','".$_POST['t1']."','".$_POST['t2']."', '".$_POST['t3']."', '".$_POST['t4']."','".$_POST['t5']."')";
     
	 //echo $query;
	if(mysql_query($query))
		{
		
	//	 echo '<script> alert("INSERT SUCCESSFULLY");</script>';


	}
	else
		{
		echo 'NOT REGISTERD';
		}
	header("location:Viewidea.php");
//exit;
 
 }

?>

<?php
include('footer.php');
?>
 

