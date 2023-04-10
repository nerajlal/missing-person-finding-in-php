<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$a=$obj->select_message();
$smartyObj->assign("data",$a);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if(isset($_POST['message'])AND($_POST['message'])!=null)
	{						
		                    $a=trim($_POST['hospitalname']);
							$b=trim($_POST['message']);
							
$obj->message($a,$b,$key);
	}				
else
	echo"<script>alert('Enter hospitalname')</script>";
}
else
echo"<script>alert('Enter message')</script>";
}
$smartyObj->display('policesubheader.tpl');
$smartyObj->display('message.tpl');
$smartyObj->display('footer.tpl');
?>