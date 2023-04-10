<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
$a=$obj->enquirysel();
$smartyObj->assign("data",$a);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if(isset($_POST['enquiry'])AND($_POST['enquiry'])!=null)
	{
		
					
		  $a=trim($_POST['hospitalname']);
		  $b=trim($_POST['enquiry']);
$obj->police_enquiry($a,$b,$key);
	}				
else
	echo"<script>alert('upload enquiry')</script>";
}
else
echo"<script>alert('enter hospitalname')</script>";
}
$smartyObj->display('policesubheader.tpl');
$smartyObj->display('enquirypolice.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>