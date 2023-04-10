<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='m')
{
if(isset($_POST['hospitalname'])AND($_POST['hospitalname'])!=null)
{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['hospitalname']))
				{
				
	if(isset($_POST['address'])AND($_POST['address'])!=null)
	{
		if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
		{
			if (preg_match('/^[0-9]*$/', $_POST['pincode']))
													{
					$no=strlen($_POST['pincode']);
				if($no==6)
				{
			if(isset($_POST['district'])AND($_POST['district'])!=null)
			{
				if(isset($_POST['city'])AND($_POST['city'])!=null)
			    {
					if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
					{
						if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
												{
												$nm1=strlen($_POST['contactno']);
												if($nm1>=10 and $nm1<=12)
												{
						if(isset($_POST['email'])AND($_POST['email'])!=null)
						{
							if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
															{
																echo "<script> alert ('Email id is not valid')</script>";
															}
																
							if(isset($_POST['password'])AND($_POST['password']!=null))
							{
							$a=trim($_POST['hospitalname']);
							$b=trim($_POST['address']);
							$c=trim($_POST['pincode']);
							$d=trim($_POST['district']);
							$e=trim($_POST['city']);
							$f=trim($_POST['contactno']);
							$g=trim($_POST['email']);
							$i=trim($_POST['password']);
$obj->hospital_reg($a,$b,$c,$d,$e,$f,$g,$i);
	                        }				
else
	echo"<script>alert('enter valid password')</script>";
                        }
else
echo"<script>alert('enter email')</script>";
                    }
                    else
						echo "<script> alert('Phone number should be 10 digit or 12 digit')</script>";	
										}
							else
							echo "<script> alert('Please enter numbers for phone number')</script>";	
									}
else
	echo"<script>alert('Enter digit as contactno')</script>";
				}
else
echo"<script>alert('Enter city')</script>";
			}
else
			echo"<script>alert('Select district')</script>";
		}
		else
						echo "<script> alert('pin number must contain 6 characters')</script>";
									}
								else
							echo "<script> alert('Please enter numbers for pincode')</script>";
												}
		else
			echo"<script>alert('Enter pincode')</script>";
    }
else
echo"<script>alert('Enter a valid address')</script>";
}
else
				echo "<script> alert('Please enter alphabets for firstname')</script>";	
			}
else
echo"<script>alert('Enter a hospital name')</script>";	
}
$smartyObj->display('regsubindex.tpl');
$smartyObj->display('hospitalreg.tpl');
$smartyObj->display('footer.tpl');
?>