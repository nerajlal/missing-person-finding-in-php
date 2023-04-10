<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$c=$_COOKIE['lkey'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$x=$obj->casesheet_view($c);
$smartyObj->assign("data",$x);
$smartyObj->display("hospitalsubheader.tpl");
$smartyObj->display("casesheetview.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
	}
?>