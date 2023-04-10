<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->Policecase_select($key);
$smartyObj->assign("data",$s);
$smartyObj->display("policesubheader.tpl");
$smartyObj->display('policecaseview.tpl');
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}

?>