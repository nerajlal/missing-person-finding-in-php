<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['clarifications'])AND($_POST['clarifications'])!=null)
{
	
							$a=trim($_POST['clarifications']);
							
$obj->queries_link($a,$key);
	}				
else
	echo"<script>alert('enter clarifications')</script>";
}

$smartyObj->display('policesubheader.tpl');
$smartyObj->display('queries.tpl');
$smartyObj->display('footer.tpl');
?>