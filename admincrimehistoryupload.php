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
        $obj->crimehistoryupload($_FILES['file'],$x);
}

$smartyObj->display('admincrimeupload.tpl');
}
else
{	
	Header("location:login.php");
}
?>