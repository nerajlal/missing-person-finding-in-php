<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $key=$_COOKIE['lkey'];
$key=$_GET['a'];
$s=$obj->data_fetch_missingperson1($key);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['missingpersonname'])AND($_POST['missingpersonname'])!=null)
{
	if(isset($_POST['address'])AND($_POST['address'])!=null)
	{
		if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
		{
			if(isset($_POST['district'])AND($_POST['district'])!=null)
			{
				if(isset($_POST['city'])AND($_POST['city'])!=null)
			    {
					if(isset($_POST['gender'])AND($_POST['gender'])!=null)
					{
						if(isset($_POST['age'])AND($_POST['age'])!=null)
						{
							if(isset($_POST['height'])AND($_POST['height'])!=null)
							{
								if(isset($_POST['weight'])AND($_POST['weight'])!=null)
								{

									if(isset($_POST['bloodgroup'])AND($_POST['bloodgroup'])!=null)
									{

						          if(isset($_POST['identificationmark'])AND($_POST['identificationmark'])!=null)
									{
								if(isset($_POST['missingplace'])AND($_POST['missingplace'])!=null)
									{
								// if(isset($_POST['missingdate'])AND($_POST['missingdate'])!=null)
								// 	{
								if(isset($_POST['photo'])AND($_POST['photo'])!=null)
									{
								if(isset($_POST['otherdetails'])AND($_POST['otherdetails'])!=null)
		                             {
							$a=trim($_POST['missingpersonname']);
							$b=trim($_POST['address']);
							$c=trim($_POST['pincode']);
							$d=trim($_POST['district']);
							$e=trim($_POST['city']);
							$f=trim($_POST['gender']);
							$g=trim($_POST['age']);
							$i=trim($_POST['height']);
							$j=trim($_POST['weight']);
							$k=trim($_POST['bloodgroup']);
							$l=trim($_POST['identificationmark']);
							$m=trim($_POST['missingplace']);
							// $n=trim($_POST['missingdate']);
							$o=trim($_POST['photo']);
							$p=trim($_POST['otherdetails']);
$obj->update_missingperson($a,$b,$c,$d,$e,$f,$g,$i,$j,$k,$l,$m,$o,$p,$key);
}
	    else
	echo"<script>alert('other details file')</script>";
                                }			
else
	echo"<script>alert('Choose file')</script>";
                                }
// else
// echo"<script>alert('Enter valid date')</script>";
//                     }
else
	echo"<script>alert('Enter place')</script>";
				}
else
	echo"<script>alert('Enter identificationmark')</script>";
}
else
echo"<script>alert('Enter bloodgroup')</script>";
}
else
echo"<script>alert('Enter weight')</script>";
			}
else
			echo"<script>alert('enter height')</script>";
		}
		else
			echo"<script>alert('Enter age')</script>";
    }
else
echo"<script>alert('Enter gender')</script>";
}
else
echo"<script>alert('Enter city')</script>";	
}
else
echo"<script>alert('Enter district')</script>";	
}
else
echo"<script>alert('Enter pincode')</script>";	
}
else
echo"<script>alert('Enter address')</script>";	
}
else
echo"<script>alert('Enter missing person name')</script>";
}	
$smartyObj->display('publicsubheader.tpl');
$smartyObj->display('missingpersonedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>