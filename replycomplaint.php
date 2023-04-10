<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['reply'])AND($_POST['reply'])!=null)
{
	
							$a=trim($_POST['reply']);
							
$obj->reply_complaint($a,$key);
	}				
else
	echo"<script>alert('enter reply')</script>";
}

//$smartyObj->display('hospitalsubheader.tpl');
$smartyObj->display('replycomplaint.tpl');
//$smartyObj->display('footer.tpl');
?>