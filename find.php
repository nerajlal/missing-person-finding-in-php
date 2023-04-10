<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
require 'classes/image.compare.class.php';
include 'apriori.php';
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$g=$_GET['key'];
$gg=$obj->find($g);
$smartyObj->assign("view",$gg);
$smartyObj->display("policesubheader.tpl");
$smartyObj->display('find.tpl');
$smartyObj->display("footer.tpl");
}
else
{   
    Header("location:login.php");
}
?>