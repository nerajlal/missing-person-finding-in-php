<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$g=$_GET['a'];
$obj->hospital_approve($g);
?>