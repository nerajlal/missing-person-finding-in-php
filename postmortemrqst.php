<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
// echo $key;exit;
$h=$obj->hospitalname();
$smartyObj->assign("data",$h);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if(isset($_POST['patientname'])AND($_POST['patientname'])!=null)
	{
		if(isset($_POST['address'])AND($_POST['address'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
				if(isset($_POST['deathdate'])AND($_POST['deathdate'])!=null)
			{
					if(isset($_POST['age'])AND($_POST['age'])!=null)
					{
					 if(isset($_POST['gender'])AND($_POST['gender'])!=null)
						 {
						 	$a=trim($_POST['hospitalname']);
							$b=trim($_POST['patientname']);
							$c=trim($_POST['address']);
							$d=trim($_POST['pincode']);
							$e=trim($_POST['deathdate']);
							$f=trim($_POST['age']);
							$g=trim($_POST['gender']);
						    

$obj->postmortem_request($a,$b,$c,$d,$e,$f,$g,$key);
	}				
else
	echo"<script>alert('Select gender')</script>";
}
else
echo"<script>alert('Enter age')</script>";
}
else
	echo"<script>alert('Enter deathdate')</script>";
					}
else
echo"<script>alert('Enter pincode')</script>";
			}
else
			echo"<script>alert('Enter address')</script>";
		}
		else
			echo"<script>alert('Enter patientname')</script>";
	}
	else
			echo"<script>alert('Enter hospitalname')</script>";
	}
$smartyObj->display('policesubheader.tpl');
$smartyObj->display('postmortemrqst.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>