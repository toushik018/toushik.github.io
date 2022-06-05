<?php
	require_once("connect.php");
	
	if(isset($_POST['cancel']))
	{
		header("Location:index.php");
	}
	
	if(isset($_POST['login']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		
		$sql = "Select * from user_info where user_id = '$user_id' and user_password = '$user_password'";
		
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) == 1)
			{
				$rows= mysqli_fetch_assoc($result);
				$_SESSION['login'] = 1;
				$_SESSION['user_id'] = $user_id;
				$_SESSION['user_name'] = $rows['user_name'];
				$_SESSION['user_email'] = $rows['user_email'];
				header("Location:index.php");
			}
			else
				echo "<script>	alert('Hi!, Who are you?.....');		</script>";
		}
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.lstyle1 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 24px;	font-weight: bold;	    font-style: italic;	color: #FF0000;	}
.lstyle2 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #0000FF;	}
.lstyle3 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #FF0000;	}
-->
</style>
</head>

<body>
<form action="" method="post">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php	require_once("header.php");		?></td>
  </tr>
  <tr>
    <td align="center"><table width="30%" border="0" cellspacing="2" cellpadding="3">
      <tr>
        <td colspan="3"><div align="center" class="lstyle1">Login Page </div></td>
        </tr>
      <tr>
        <td width="43%">&nbsp;</td>
        <td width="6%">&nbsp;</td>
        <td width="51%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">User ID </div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_id" size="30" class="lstyle2"  /> </td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td>&nbsp;</td>
        <td><input type="password" name="user_password" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
        <td><a href="new_user.php" target="_self"> (Register)</a></td>
      </tr>
      <tr>
        <td><div align="right">
          <input type="submit" name="login" value="Login" class="lstyle2" />
        </div></td>
        <td>&nbsp;</td>
        <td><input type="submit" name="cancel" value="Cancel" class="lstyle3" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php	require_once("footer.php");		?></td>
  </tr>
</table>
</form>
</body>
</html>
