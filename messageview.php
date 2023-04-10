<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$g=$_COOKIE['lkey'];
$x=$obj->data_fetch_message($g);

$smartyObj->assign("data",$x);
$smartyObj->display("hospitalsubheader.tpl");
$smartyObj->display("messageview.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}

?>