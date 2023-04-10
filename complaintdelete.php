<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['a'];
// echo $key; exit;
$obj->delete_complaint($key);
?>