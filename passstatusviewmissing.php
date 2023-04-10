<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$x=$obj->passstatus_view();
$smartyObj->assign("data",$x);
$smartyObj->display("index.tpl");
$smartyObj->display("passstatusviewmissing.tpl");
$smartyObj->display("footer.tpl");
?>