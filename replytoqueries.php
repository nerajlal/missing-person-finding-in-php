<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo"hide";exit;
if(isset($_POST['Reply'])AND($_POST['Reply'])!=null)
{
	// echo"rply";exit;
			$a=trim($_POST['Reply']);
							
$obj->replytoqueries($a,$key);
	}				
else
	echo"<script>alert('enter reply')</script>";
}

$smartyObj->display('hospitalsubheader.tpl');
$smartyObj->display('replytoqueries.tpl');
$smartyObj->display('footer.tpl');
?>