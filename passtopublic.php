<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$g=$_GET['a'];
$obj->public_pass($g);
?>