<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$x=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
        $obj->postmortemupload($_FILES['file'],$x);
}
$smartyObj->display("policesubheader.tpl");
$smartyObj->display('postmortemupload.tpl');
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>