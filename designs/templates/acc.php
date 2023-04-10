<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['district'])AND($_POST['district'])!=null)
{
	if(isset($_POST['city'])AND($_POST['city'])!=null)
	{
		if(isset($_POST['street'])AND($_POST['street'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
				if(isset($_POST['accidentdetails'])AND($_POST['accidentdetails'])!=null)
			{
					if(isset($_POST['photo'])AND($_POST['photo'])!=null)
					{
						// if(isset($_POST['f'])AND($_POST['f'])!=null)
						// {
						// 	if(isset($_POST['g'])AND($_POST['g']!=null))
						// 	{
						// 		if(isset($_POST['i'])AND($_POST['i'])!=null)
						// 		{
							$a=trim($_POST['district']);
							$b=trim($_POST['city']);
							$c=trim($_POST['street']);
							$d=trim($_POST['pincode']);
							$e=trim($_POST['accidentdetails']);
							$f=trim($_POST['photo']);
							// $contactno=trim($_POST['f']);
							// $email=trim($_POST['g']);
							// $password=trim($_POST['i']);
$obj->accident_reg($a,$b,$c,$d,$e,$f);
	}				
else
	echo"<script>alert('upload photo')</script>";
}
else
echo"<script>alert('enter accidentdetails')</script>";
}
else
	echo"<script>alert('Enter pincode')</script>";
					}
else
echo"<script>alert('Enter street')</script>";
			}
else
			echo"<script>alert('Select city')</script>";
		}
		else
			echo"<script>alert('Enter district')</script>";
	}
// 	else
// 		echo"<script>alert('Enter valid addressline')</script>";
// }
// else
// echo"<script>alert('Enter a valid address')</script>";
// }	
}
//$smartyObj->display('usersubhead.tpl');
$smartyObj->display('accidentreg.tpl');
//$smartyObj->display('footer.tpl');
?>