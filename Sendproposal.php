
<?php
include_once("config.php");
include('Businessheader.php');
error_reporting(0);

$query2 = "select * from businessrequest where R_id	=".$_GET['Add']."";
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
		<th colspan="2" style="color: #000000">Send Proposal</th>
		<br>
	<tr>
	</center>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="400" height="300">
	<caption></caption>
	
	
	<tr>
		<td class="col" style="color: #000000">Request Id:</td>
		<td><input type="text" name="t1"  value="<?php echo $row['R_id'] ?>"  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Business Id:</td>
		<td><input type="text" name="t2"  value="<?php echo $row['Bid'] ?>"  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Business:</td>
		<td><input type="text" name="t3" value="<?php echo $row['Business'] ?>"  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Proposal:</td>
		<td><input type="text" name="t4" value=" "  style="color: #000000" class="required"  /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Investor Id:</td>
		<td><input type="text" name="t5" value="<?php echo $row['Investorid'] ?>"  style="color: #000000" class="required"  /></td>
	</tr><tr>
		<td class="col" style="color: #000000">Proposal Mail:</td>
		<td><input type="text" name="t7" value="<?php echo $row['pmail'] ?>"  style="color: #000000" class="required"  /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Business People Id:</td>
		<td><input type="text" name="t6" value="<?php  echo $_SESSION['login_user']; ?>"  style="color: #000000" class="required"  /></td>
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

		 $query = "INSERT INTO `proposal` VALUES ('null','".$_POST['t1']."','".$_POST['t2']."', '".$_POST['t3']."', '".$_POST['t4']."','".$_POST['t5']."' , '".$_POST['t7']."','".$_POST['t6']."')";
     
	 //echo $query;
	if(mysql_query($query))
		{
		
	//	 echo '<script> alert("INSERT SUCCESSFULLY");</script>';


	}
	else
		{
		echo 'NOT REGISTERD';
		}
	header("location:Viewrequestbusiness.php");
//exit;
 
 }

?>

<?php
include('footer.php');
?>
 

