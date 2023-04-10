<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$x=$obj->data_fetch_missingperson();
$smartyObj->assign("data",$x);
$smartyObj->display("publicsubheader.tpl");
$smartyObj->display("publicmissingview.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>