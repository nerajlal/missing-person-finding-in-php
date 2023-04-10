<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='m')
{
if(isset($_POST['criminalname'])AND($_POST['criminalname'])!=null)
{
	if(isset($_POST['address'])AND($_POST['address'])!=null)
	{
		if(isset($_POST['age'])AND($_POST['age'])!=null)
		{
			if(isset($_POST['gender'])AND($_POST['gender'])!=null)
			{
				if(isset($_POST['otherdetails'])AND($_POST['otherdetails'])!=null)
			{
					
							$a=trim($_POST['criminalname']);
							$b=trim($_POST['address']);
							$c=trim($_POST['age']);
							$d=trim($_POST['gender']);
							$e=trim($_POST['otherdetails']);
							
$obj->crime_history($a,$b,$c,$d,$e,$key);
	}				
else
	echo"<script>alert('Enter other details')</script>";
}
else
echo"<script>alert('Choose gender')</script>";
}
else
	echo"<script>alert('Enter age')</script>";
					}

	else
			echo"<script>alert('Enter address')</script>";
	}
	else
			echo"<script>alert('Enter criminal name')</script>";
	}
	


$smartyObj->display('policesubheader.tpl');
$smartyObj->display('crimehistory.tpl');
$smartyObj->display('footer.tpl');
?>