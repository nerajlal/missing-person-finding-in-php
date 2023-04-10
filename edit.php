<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$s=$obj->select_data($key);
$smartyObj->assign("data",$s);
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
			$name=trim($_POST['a']);
			$address=trim($_POST['b']);
			$gender=trim($_POST['gender']);
			$email=trim($_POST['c']);
			$obj->update_data($name,$address,$gender,$email,$key);
		}
		else
			echo"<script>alert('invalid email')</script>";
	}
	else
		echo"<script>alert('select an option')</script>";
}
else
echo"<script>alert('enter address')</script>";
}
else
echo"<script>alert('enter name')</script>";
}
$smartyObj->display('edit.tpl');

?>