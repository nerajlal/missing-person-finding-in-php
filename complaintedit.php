<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$k=$_GET['a'];
// echo $k;exit;
$s=$obj->select_complaint($k);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['complaintsubject'])AND($_POST['complaintsubject'])!=null)
{
	if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{
		
							$a=trim($_POST['complaintsubject']);
							$b=trim($_POST['complaint']);
							
$obj->update_complaint($a,$b,$k);
	                        }				
else
echo"<script>alert('Enter a subject')</script>";
}
else
echo"<script>alert('Enter a complaint')</script>";	
}
$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('complaintedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>