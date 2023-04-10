<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['patientname'])AND($_POST['patientname'])!=null)
{
	if(isset($_POST['address'])AND($_POST['address'])!=null)
	{
		if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
		{
			if(isset($_POST['gender'])AND($_POST['gender'])!=null)
			{
				if(isset($_POST['age'])AND($_POST['age'])!=null)
			{
					if(isset($_POST['bloodgroup'])AND($_POST['bloodgroup'])!=null)
					{
					 if(isset($_POST['photo'])AND($_POST['photo'])!=null)
						 {
						 	if(isset($_POST['otherdetails'])AND($_POST['otherdetails']!=null))
						 	{
		if(isset($_POST['admitteddate'])AND($_POST['admitteddate'])!=null)
						 		{
							$a=trim($_POST['patientname']);
							$b=trim($_POST['address']);
							$c=trim($_POST['pincode']);
							$d=trim($_POST['gender']);
							$e=trim($_POST['age']);
							$f=trim($_POST['bloodgroup']);
							$g=trim($_POST['photo']);
						    $i=trim($_POST['otherdetails']);
						    $j=trim($_POST['admitteddate']);
$obj->case_sheet($a,$b,$c,$d,$e,$f,$g,$i,$j,$key);
	}				
else
	echo"<script>alert('Enter date(format)')</script>";
}
else
echo"<script>alert('Enter other details')</script>";
}
else
	echo"<script>alert('Choose file')</script>";
					}
else
echo"<script>alert('Enter bloodgroup')</script>";
			}
else
			echo"<script>alert('Enter age')</script>";
		}
		else
			echo"<script>alert('Select gender')</script>";
	}
	else
			echo"<script>alert('Enter pincode')</script>";
	}
	else
			echo"<script>alert('Enter address')</script>";
	}
	else
			echo"<script>alert('Enter patient name')</script>";
	}
	


$smartyObj->display('hospitalsubheader.tpl');
$smartyObj->display('casesheet.tpl');
$smartyObj->display('footer.tpl');
?>