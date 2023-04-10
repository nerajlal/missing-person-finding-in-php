<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['a'])AND($_POST['a'])!=null)
{
if(isset($_POST['b'])AND($_POST['b'])!=null)
{
if(isset($_POST['gender'])AND($_POST['gender'])!=null)
{
if(isset($_POST['c'])AND($_POST['c'])!=null)	
{	
if(isset($_POST['d'])AND($_POST['d'])!=null)	
{
$name=trim($_POST['a']);
$address=trim($_POST['b']);
$gender=trim($_POST['gender']);
$email=trim($_POST['c']);
$password=trim($_POST['d']);
$obj->register($name,$address,$gender,$email,$password);
}
else
echo"<script>alert('password is empty')</script>";
}
else
echo"<script>alert('email is empty')</script>";
}
else
echo"<script>alert('select gender')</script>";
}
else
echo"<script>alert('type address')</script>";
}
else
echo"<script>alert('input name')</script>";
}
$smartyObj->display('reg.tpl');
?>








