<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$s=$obj->selectcase_data($key);
$smartyObj->assign("data",$s);
$smartyObj->display("publicsubheader.tpl");
$smartyObj->display('caseregview.tpl');
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>