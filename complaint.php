<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$a=$obj->complaintssel();
$smartyObj->assign("data",$a);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['complaintsubject'])AND($_POST['complaintsubject'])!=null)
{
	if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{

		  $a=trim($_POST['complaintsubject']);
		  $b=trim($_POST['complaint']);
$obj->complaint($a,$b,$key);
	}				
else
	echo"<script>alert('upload enquiry')</script>";
}
else
echo"<script>alert('enter hospitalname')</script>";
}
$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('complaint.tpl');
$smartyObj->display('footer.tpl');

?>