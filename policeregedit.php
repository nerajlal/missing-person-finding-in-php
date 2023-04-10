<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

// $key=$_GET['pkey'];
$c=$_COOKIE['lkey'];
$s=$obj->select_data($c);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['a'])AND($_POST['a'])!=null)
{
	if(isset($_POST['b'])AND($_POST['b'])!=null)
	{
		if(isset($_POST['c'])AND($_POST['c'])!=null)
		{
			if(isset($_POST['d'])AND($_POST['d'])!=null)
			{
				if (preg_match('/^[0-9]*$/', $_POST['d']))
													{
					$no=strlen($_POST['d']);
				if($no==6)
				{
				if(isset($_POST['district'])AND($_POST['district'])!=null)
			{
					if(isset($_POST['e'])AND($_POST['e'])!=null)
					{
						if(isset($_POST['f'])AND($_POST['f'])!=null)
						{
							if (preg_match('/^[0-9]*$/', $_POST['f']))	
												{
												$nm1=strlen($_POST['f']);
												if($nm1>=10 and $nm1<=12)
												{
							if(isset($_POST['g'])AND($_POST['g']!=null))
							{
								if(!filter_var($_POST['g'],FILTER_VALIDATE_EMAIL))
															{
																echo "<script> alert ('Email id is not valid')</script>";
															}
								
							$stationid=trim($_POST['a']);
							$addressline1=trim($_POST['b']);
							$addressline2=trim($_POST['c']);
							$pincode=trim($_POST['d']);
							$district=trim($_POST['district']);
							$city=trim($_POST['e']);
							$contactno=trim($_POST['f']);
							// $email=trim($_POST['g']);
							// $password=trim($_POST['i']);
$obj->update_data($stationid,$addressline1,$addressline2,$pincode,$district,$city,$contactno,$c);
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
		echo"<script>alert('Enter valid addressline')</script>";
}
else
echo"<script>alert('Enter a valid address')</script>";
}	
$smartyObj->display('policesubheader.tpl');
$smartyObj->display('policeregedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>