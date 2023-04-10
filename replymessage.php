<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['a'];
$ab=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['reply'])AND($_POST['reply'])!=null)
{
							
		                    $a=trim($_POST['reply']);
							
							
$obj->reply_message($a,$key,$ab);
	}				
else
	echo"<script>alert('Enter reply')</script>";
}
$smartyObj->display('hospitalsubheader.tpl');
$smartyObj->display('replymessage.tpl');
$smartyObj->display('footer.tpl');
?>
