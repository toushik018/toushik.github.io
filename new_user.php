<?php
	require_once("connect.php");
	
	if(isset($_POST['cancel']))
	{
		header("Location:login.php");
	}
	
	
	if(isset($_POST['register']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_mobile = $_POST['user_mobile'];
		$user_type = "General";
		
		$sql = "Select * from user_info where user_id = '$user_id'";
		
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) == 0)
			{
				// Insert
				$ins = "INSERT INTO user_info(`user_id`, `user_password`, `user_name`, `user_mobile`, `user_email`,`user_type`) VALUES ('$user_id', '$user_password', '$user_name', '$user_mobile', '$user_email','$user_type')";
				mysqli_query($conn,$ins);
				header("Location:login.php");
			}
			else
				echo "<script>	alert('This ID already used/exist');		</script>";
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.urstyle1 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 17px;	font-weight: normal;	font-style: italic;	color: #FF0000;	}
.urstyle2 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #0000FF;	}
.urstyle3 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #FF0000;	}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="6"><?php 	require_once("header.php")			?> </td>
  </tr>
  <tr>
    <td colspan="6"><div align="center" class="urstyle1">User Registration </div></td>
  </tr>
  <tr>
    <td class="urstyle2"><div align="right">User ID </div></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="text" name="user_id" size="30" class="urstyle3"  /></td>
  </tr>
  <tr>
    <td class="urstyle2"><div align="right">Password</div></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="password" name="user_password" size="30"  /></td>
  </tr>
  <tr>
    <td width="19%" class="urstyle2"><div align="right">Name</div></td>
    <td width="1%">&nbsp;</td>
    <td colspan="4"><input type="text" name="user_name" size="30" class="urstyle3"  /></td>
  </tr>
  <tr>
    <td class="urstyle2"><div align="right">Email</div></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="text" name="user_email" size="30" class="urstyle3"  /></td>
  </tr>
  <tr>
    <td class="urstyle2"><div align="right">Phone Number </div></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="text" name="user_mobile" size="30" class="urstyle2"  /></td>
  </tr>
  
  <tr>
    <td class="urstyle2"><div align="right"></div></td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="register" value=" Register           " class="urstyle2"  />
    </div></td>
    <td>&nbsp;</td>
    <td width="5%">&nbsp;</td>
    <td width="41%"><input type="submit" name="cancel" value="Cancel" class="urstyle2" /></td>
    <td width="17%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><?php	require_once("footer.php")	?></td>
  </tr>
</table>
</form>
</body>
</html>
