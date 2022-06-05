<?php
	require_once("connect.php");
	require_once("country_list.php");
	
	function User_Info($user_id,$field)
	{
	global $conn;
	$sql = "Select * from user_info where user_id = '$user_id'";
	if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$rows = mysqli_fetch_assoc($result);
					return $rows[$field];
	   			}
				else
					return "";
			}
		else
			return "";
	}
	
	
	if(isset($_POST['general_update']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_mobile = $_POST['user_mobile'];
		$user_email = $_POST['user_email'];
		$user_blood = $_POST['user_blood'];
		$user_address = $_POST['user_address'];
		$user_father = $_POST['user_father'];
		$user_mother = $_POST['user_mother'];
		$user_pcontact = $_POST['user_pcontact'];
		$user_nationality = $_POST['user_nationality'];
		$user_religion = $_POST['user_religion'];
		
		$sql = "UPDATE user_info SET user_password = '$user_password', user_name = '$user_name', user_mobile = '$user_mobile', user_email = '$user_email', user_blood = '$user_blood', user_address = '$user_address', user_father = '$user_father', user_mother = '$user_mother', user_pcontact = '$user_pcontact', user_natoinality = '$user_nationality', user_religion = '$user_religion' WHERE user_id = '$user_id'";
		mysqli_query($conn,$sql);
	}
	
	if(isset($_POST['edu_add']))
	
		{
			$user_id = $_SESSION['user_id'];
			$edu_exam = strtoupper($_POST['edu_exam']); 
			$edu_subj = $_POST['edu_subj'];
			$edu_inst = $_POST['edu_inst'];
			$edu_board = $_POST['edu_board'];
			$edu_year = $_POST['edu_year'];
			$edu_result = $_POST['edu_result'];
			$edu_special = $_POST['edu_special'];
			$remarks = $_POST['edu_remarks'];
			
			
			$sql = "Select * from user_educational_info where user_id = '$user_id' and edu_exam = '$edu_exam' and edu_year = '$edu_year'";
		
		if($result = mysqli_query($conn,$sql))
		{
			if(mysqli_num_rows($result) == 0)
			{
				$ins = "INSERT INTO `user_educational_info`(`id`, `user_id`, `edu_exam`, `edu_subj`, `edu_inst`, `edu_board`, `edu_year`, `edu_result`, `edu_special`, `created`, `remarks`) VALUES ()";
				mysqli_query($conn,$ins);
			}
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
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 80px;
	color: #FF0000;
	font-weight: bold;
}
.pstyle1 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 24px;	font-weight: bold;	    font-style: italic;	color: #FF0000;	}
.pstyle3 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: bold;	    font-style: italic;	color: #FF0000;	}
.pstyle2 { 	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 15px;	font-weight: normal;	font-style: normal;	color: #0000FF;	}
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
        <td><a href="profile_update.php?task=1" target="_self">General Information </a></td>
      </tr>
      <tr>
        <td><a href="profile_update.php?task=2" target="_self">Educational Information</a> </td>
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
    <td width="10%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="37%">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right">ID</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_id" size="30" disabled="disabled" value="<?php echo $_SESSION['user_id'];		?>" /></td>
    <td>&nbsp;</td>
    <td><div align="right">Address</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_address" style="width:70%" value="<?php echo User_Info($_SESSION['user_id'],"user_address"); ?>"  /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td>&nbsp;</td>
    <td><input type="password" name="user_password" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_password"); ?>"  /></td>
    <td>&nbsp;</td>
    <td><div align="right">Father's Name </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_father" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_father"); ?>"  /></td>
  </tr>
  <tr>
    <td><div align="right">Name</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_name" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_name"); ?>"  /> </td>
    <td>&nbsp;</td>
    <td><div align="right">Mother's Name </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_mother" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_mother"); ?>"  /></td>
  </tr>
  <tr>
    <td><div align="right">Email</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_email" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_email") ; ?>" /> </td>
    <td>&nbsp;</td>
    <td><div align="right">Contact No. </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_pcontact" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_pcontact"); ?>"  /></td>
  </tr>
  <tr>
    <td><div align="right">Phone No </div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_mobile" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_mobile") ?>"  /></td>
    <td>&nbsp;</td>
    <td><div align="right">Nationality</div></td>
    <td>&nbsp;</td>
    <td><select name="user_nationality" class="pstyle2">
	
	<option><?php echo User_Info($_SESSION['user_id'],"user_nationality") ?></option>
	
	<?php
	foreach($country_list as $country)
	{
			echo "<option>".$country."</option>";
	}
	
	?>	
	</select></td>
  </tr>
  <tr>
    <td><div align="right">Blood Group </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right">Religion</div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="user_religion" size="30" value="<?php echo User_Info($_SESSION['user_id'],"user_religion"); ?>"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="general_update" value="Update" class="pstyle2" /></td>
  </tr>
</table>

	<?php		
			break;
			
			case 2:
			?>
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><div align="center" class="pstyle1">Educational Information </div></td>
    </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="3">
      <tr>
        <td width="48%" class="pstyle2"><div align="right">User Name </div></td>
        <td width="2%">&nbsp;</td>
        <td width="50%"><?php echo User_Info($_SESSION['user_id'],"user_name"); ?></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Exam/Degree</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_exam" size="30"  /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Subject/Group</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_sub" size="30"  /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Institution/university</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_inst" size="30" /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Board</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_board" size="30"  /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Year</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Result</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_result" size="30"  /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Special</div></td>
        <td>&nbsp;</td>
        <td><input type="text" name="edu_speial" size="30"  /></td>
      </tr>
      <tr>
        <td class="pstyle2"><div align="right">Remarks</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="edu_add" type="submit" class="pstyle3" value="ADD" /></td>
      </tr>
    </table></td>
    <td width="43%" valign="top">jfghfgfhg</td>
  </tr>
</table>

			
			
			
			
			
			<?php
			break;
			
			
			case 3:
			
			
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