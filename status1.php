<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$g=$_COOKIE['lkey'];
$x=$obj->select_status1($g);
$smartyObj->assign("data",$x);
$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('status1.tpl');
$smartyObj->display('footer.tpl')
?>