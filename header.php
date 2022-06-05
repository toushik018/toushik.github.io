<?php
	require_once("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Students Portal</title>
 <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> <img src="image/logo.png" width="100%" height="100"/></td>
  </tr>
  <tr>
    <td>
	<div class="example">
    <ul class="nav">
        <li><a href="http://localhost/kyau5/index.php">Home</a></li>
        <li><a href="#">Admin</a>
            <ul class="subs">
                <li><a href="#">HTML / CSS</a></li>
                <li><a href="#">JS / jQuery</a></li>
                <li><a href="#">PHP</a></li>
                
            </ul>
        </li>
        <li><a href="#">Students</a>
            <ul class="subs">
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                
            </ul>
        </li>
        <li><a href="http://localhost/kyau5/library.php">Library</a></li>
        <li><a href="#">Back</a></li>
		<?php
		if(isset($_SESSION['login']))
		{
			echo"<li><a href='Logout.php'>Logout</a></li>";
			echo"<li><a href='profile_update.php'>Logged in by : ".$_SESSION['user_name']."</a></li>";
		}
		else
		{
			echo"<li><a href='Login.php'>Login</a></li>";
		}
		?>
    </ul>
    <div style="clear:both"></div>
</div>	
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>

	</td>
  </tr>
</table>
</body>
</html>
