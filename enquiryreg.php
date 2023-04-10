<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$a=$obj->enquirysel();
$smartyObj->assign("data",$a);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if(isset($_POST['enquiry'])AND($_POST['enquiry'])!=null)
	{
		// if(isset($_POST['street'])AND($_POST['street'])!=null)
		// {
		// 	if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
		// 	{
		// 		if(isset($_POST['accidentdetails'])AND($_POST['accidentdetails'])!=null)
		// 	{
		// 			if(isset($_POST['photo'])AND($_POST['photo'])!=null)
		  $a=trim($_POST['hospitalname']);
		  $b=trim($_POST['enquiry']);
$obj->enquiry($a,$b,$key);
	}				
else
	echo"<script>alert('upload enquiry')</script>";
}
else
echo"<script>alert('enter hospitalname')</script>";
}
$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('enquiryreg.tpl');
$smartyObj->display('footer.tpl');
?>