<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$g=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=null)
{
	// echo "name";exit;
	if(isset($_POST['address'])AND($_POST['address'])!=null)
	{
		// echo "add";exit;
			if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
			{
				// echo "cno";exit;
				if(isset($_POST['aadharno'])AND($_POST['aadharno'])!=null)
			    {
			    	// echo "ano";exit;
					if(isset($_POST['founddetails'])AND($_POST['founddetails'])!=null)
					{
						// echo "founddetails";exit;
				if(isset($_POST['founddate'])AND($_POST['founddate'])!=null)
							// echo "foundeddate";exit;
						{
							$a=trim($_POST['name']);
							$b=trim($_POST['address']);
							$c=trim($_POST['contactno']);
							$d=trim($_POST['aadharno']);
							$e=trim($_POST['founddetails']);
							$f=trim($_POST['founddate']);

                         $obj->found($a,$b,$c,$d,$e,$f,$g);
        }
 	    else
	echo"<script>alert(' founded date ')</script>";
     }			
else
	echo"<script>alert('found  details')</script>";
    }                  
else
	echo"<script>alert('Enter aadhar no')</script>";
    }
else
	echo"<script>alert('Enter contact no')</script>";
    }
else
echo"<script>alert('Enter address')</script>";
   }
else
echo"<script>alert('Enter name')</script>";
}
$smartyObj->display('index.tpl');
$smartyObj->display('found.tpl');
$smartyObj->display("footer.tpl");
?>