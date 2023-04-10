<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$c=$_COOKIE['lkey'];
$x=$obj->adminview_crime($c);
$smartyObj->assign("data",$x);
// $smartyObj->display("policesubheader.tpl");
$smartyObj->display("admincrimeview.tpl");
}
else
{	
	Header("location:login.php");
}
// $smartyObj->display("footer.tpl");
?>