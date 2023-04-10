<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	if(isset($_POST['a'])AND($_POST['a'])!=null)
	{
		if(isset($_POST['b'])AND($_POST['b'])!=null)
		{
			$password=trim($_POST['b']);
			$email=trim($_POST['a']);
			$obj->login($email,$password);
		}
		else
		echo"<script>alert('incorrect password')</script>";
		}
		else
			echo"<script>alert('invalid email')</script>";
	}
	$smartyObj->display('login.tpl');
	?>
