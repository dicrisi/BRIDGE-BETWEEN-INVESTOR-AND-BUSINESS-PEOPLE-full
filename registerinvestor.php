
<?php
include('header.php');
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
<table>
<tr>
<td>
<h3>New Investor Registeration</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	
	<tr>
		<td class="col" style="color: #000000">Name:</td>
		<td><input type="text" name="first_name"  value=""  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">User ID:</td>
		<td><input type="text" name="U_name" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Password:</td>
		<td><input type="password" name="password" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Email:</td>
		<td><input type="text" name="email_id" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col"  style="color: #000000">Address:</td>
		<td><input type="text" name="address" value=""  style="color: #000000" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  style="color: #000000"  >Mobile:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="mobile" value="" style="color: #000000" /></td>
	</tr>
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">BACK</a>
	</form>
</div>


<?php

 include_once("config.php");  

 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `investor`"; 
	$query .= " VALUES ('".$_POST['first_name']."', '".$_POST['U_name']."', '".$_POST['password']."','".$_POST['email_id']."', '";
	$query .=  $_POST['address']."', '";
	$query .= $_POST['mobile']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Investorlogin.php");
//	exit;
 
 }

?>

<?php
include('footer.php');
?>
 

