<?php
	require_once("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.pstyle1 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 24px;	font-weight: bold;	    font-style: italic;	color: #FF0000;	}
.pstyle3 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: bold;	    font-style: italic;	color: #FF0000;	}
.pstyle2 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #0000FF;	}
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; color: #0000FF; }
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8"><?php 	require_once("header.php")			?> </td>
  </tr>
  <tr>
    <td colspan="8"><div align="center" class="pstyle1">Profile Update </div></td>
  </tr>
  <tr>
    <td width="15%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="profile_update.php?task=1" target="_self"><strong>General Information </strong></a></td>
      </tr>
      <tr>
        <td><a href="profile_update.php?task=2" target="_self"><strong>Educational Information</strong></a> </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>	  
    </table></td>
    <td width="85%" valign="top"><?php
	if(isset($_REQUEST['task']))
	{
		$task = $_REQUEST['task'];
		
		switch($task)
		{
				case 1:
	?>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
</table>

	<table width="97%" border="0">
      <tr>
        <td width="6%"><div align="left">User ID </div></td>
        <td width="0%">&nbsp;</td>
        <td width="21%"><input type="text" name="user_id" size="30" class="lstyle2"  /></td>
        <td width="39%" rowspan="2"><div align="right">Address</div></td>
        <td width="1%">&nbsp;</td>
        <td width="33%" rowspan="2"><input type="text" name="user_address" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td><div align="left">Password</div></td>
        <td>&nbsp;</td>
        <td><input type="password" name="user_password" size="30" class="lstyle2"  /></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td><div align="left">Email</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_email" size="30" class="lstyle2"  /></td>
        <td><div align="right">Father's Name </div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_father" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td><div align="left">Mobile</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_mobile" size="30" class="lstyle2"  /></td>
        <td><div align="right">Mother's Name</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_mother" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td><div align="left">Blood</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_blood" size="30" class="lstyle2"  /></td>
        <td><div align="right">Contact</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_contact" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td>Religion</td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_religion" size="30" class="lstyle2"  /></td>
        <td><div align="right">Nationality</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_nationality" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="update" value="Update" class="lstyle2" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
	<?php		
			break;
			
			case 2:
		
	?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
</table>

	<table width="100%" border="0">
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td width="10%"><div align="left">User Name </div></td>
        <td width="1%">&nbsp;</td>
        <td width="89%"><input type="text" name="user_id" size="30" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td><div align="left">Exam/Degree</div></td>
        <td>&nbsp;</td>
        <td><input type="password" name="user_exam" size="15" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td><div align="left">Institute</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_institute" size="50" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td><div align="left">Board</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_board" size="30" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td><div align="left">Year</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_year" size="10" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td>Result</td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_result" size="10" class="lstyle2"  /></td>
        </tr>
      <tr>
        <td>Special</td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_special" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td>Remarks</td>
        <td>&nbsp;</td>
        <td><input type="text" name="user_remarks" size="30" class="lstyle2"  /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="add" value="Add" class="lstyle2" /></td>
        </tr>
    </table>
	<?php		
			break;
		}
	}
		
	?>
	
	</td>
  </tr>
  <tr>
    <td colspan="8"><?php	require_once("footer.php")	?></td>
  </tr>
</table>
</body>
</html>
