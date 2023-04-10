<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$s=$obj->data_fetching();
$smartyObj->assign("data",$s);
$smartyObj->display('tab.tpl');
?>