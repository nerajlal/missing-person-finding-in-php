<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['a'];
$s=$obj->case_data($key);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	if(isset($_POST['case'])AND ($_POST['case'])!=null)
	{
		if(isset($_POST['casedetails'])AND ($_POST['casedetails'])!=null)
		{
			if(isset($_POST['occurenceday'])AND ($_POST['occurenceday'])!=null)
			{
				if(isset($_POST['occurencedate'])AND ($_POST['occurencedate'])!=null)
				{
					if(isset($_POST['occurencetime'])AND ($_POST['occurencetime'])!=null)
					{
						if(isset($_POST['occurenceplace'])AND ($_POST['occurenceplace'])!=null)

							{
								$a=trim($_POST['case']);
								$b=trim($_POST['casedetails']);
								$c=trim($_POST['occurenceday']);
								$d=trim($_POST['occurencedate']);
								$e=trim($_POST['occurencetime']);
								$f=trim($_POST['occurenceplace']);
								$obj->casereg_edit($a,$b,$c,$d,$e,$f,$key);
							}
							else
								echo"<script>alert('enter place')</script>";
					}
					else
								echo"<script>alert('enter time')</script>";				
						}
						else
								echo"<script>alert('enter date')</script>";
			}
			else
								echo"<script>alert('enter day')</script>";
		}
		else
								echo"<script>alert('enter case detais')</script>";
	}
	else
								echo"<script>alert('enter case')</script>";
}
$smartyObj->display("publicsubheader.tpl");
$smartyObj->display('caseregedit.tpl');
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>