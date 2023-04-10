<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
  $key=$_GET['a'];
$s=$obj->enquiryedit_data();
$smartyObj->assign("data",$s);
$w=$obj->enquiryedit_data1($key);
$smartyObj->assign("view",$w);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if(isset($_POST['enquiry'])AND($_POST['enquiry'])!=null)
	{
		
			$a=trim($_POST['hospitalname']);
			$b=trim($_POST['enquiry']);
		
$obj->updateenquiry_data($a,$b,$key);
		}
		else
			echo"<script>alert('enter the enquiry')</script>";
	}
	else
		echo"<script>alert('select an option')</script>";
}

$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('enquirypublicviewedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>