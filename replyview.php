<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$c=$_COOKIE['lkey'];
$x=$obj->replyview_enquiry($c);
$smartyObj->assign("data",$x);
$smartyObj->display("replyview.tpl");
}
else
{	
	Header("location:login.php");
}
?>