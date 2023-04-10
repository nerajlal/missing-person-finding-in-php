<?php
class userclass
{
	function police_reg($stationid,$addressline1,$addressline2,$pincode,$district,$city,$contactno,$email,$password)
	{
		$enc=md5($password);
		$key1=uniquekey("login","lkey");
		$qry1="insert into login(lkey,email,password,usertype)values('".$key1."','".$email."','".$enc."','1')";
		$exe1=mysql_query($qry1);

		$key=uniquekey("police_registration","pkey");
        $id=keytoid("login","lkey",$key1);
		$qry="insert into police_registration(pkey,stationid,addline1,addline2,pincode,district,city,contactno,loginid)values('".$key."','".$stationid."','".$addressline1."','".$addressline2."','".$pincode."','".$district."','".$city."','".$contactno."','".$id."')";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function hospital_reg($a,$b,$c,$d,$e,$f,$g,$i)
	{
		$enc=md5($i);
		$key1=uniquekey("login","lkey");
		$qry1="insert into login(lkey,email,password,usertype)values('".$key1."','".$g."','".$enc."','2')";
		$exe1=mysql_query($qry1);
		$key=uniquekey("hospital_registration","hkey");
        $id=keytoid("login","lkey",$key1);
		$qry="insert into hospital_registration(hkey,hospitalname,address,pincode,district,city,contactno,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$id."')";
		 //echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
function public_reg($a,$b,$c,$d,$e,$f,$g,$i,$j,$k)
	{
		$enc=md5($k);

		$key1=uniquekey("login","lkey");
		$qry1="insert into login(lkey,email,password,usertype)values('".$key1."','".$j."','".$enc."','3')";
		$exe1=mysql_query($qry1);
		$key=uniquekey("public_registration","pubkey");
        $id=keytoid("login","lkey",$key1);

		$qry="insert into public_registration(pubkey,fullname,address,pincode,district,city,gender,aadharno,contactno,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$i."','".$id."')";
		 //echo $qry;exit;
		$exe=mysql_query($qry);
		 //
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function login($a,$b)
	{
		$enc=md5($b);
		$qry="select * from login where email='".$a."'and password='".$enc."' ";
//echo $qry;exit;
		$exe=mysql_query($qry);

		// $key=null;
		// $u=null;
		$c=0;
		while($rr=mysql_fetch_array($exe))
		{
			
			$k=$rr['lkey'];
			$u=$rr['usertype'];
			$c=$c+1;
		}
		if($c>0)
		{
			setcookie('lkey',$k);
			setcookie('logined',1);
			if($u==0)
			{
			header("location:admin.php");
			}
			elseif($u==1)
			{
			header("location:policehome.php");
				}
		elseif($u==2)
		{
			header("location:hospitalhome.php");
		}
		elseif($u==3)
		{
			// echo "hi";
			header("location:publichome.php");
		}
		else
		{
			echo"<script>alert('invalid user')</script>";
		}
	}
	else
		echo"<script>alert('invalid username and password')</script>";

	}
	function data_fetch_police()
	{
		$qry="select * from police_registration inner join  login on login.id=police_registration.loginid";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function data_fetch_hospital()
	{
		$qry="select * from hospital_registration inner join  login on login.id=hospital_registration.loginid";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function data_fetch_public()
	{
		$qry="select * from public_registration inner join  login on login.id=public_registration.loginid";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function police_approve($g)
	{
		 // $id=keytoid("login","lkey",$g);
		 // echo $id;exit;
		 $qry="update login set status='1' where id='".$g."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('approved');
			window.location.href='adminpoliceview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not approved')</script>";
		}
	}

function police_reject($key)
	{
		 // $id=keytoid("login","lkey",$key);
		 // echo $id;exit;
		 $qry="update login set status='2' where id='".$key."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('rejected');
			window.location.href='adminpoliceview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not rejected')</script>";
		}
	}
function hospital_approve($g)
	{
		 // $id=keytoid("login","lkey",$g);
		 // echo $id;exit;
		 $qry="update login set status='1' where id='".$g."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('approved');
			window.location.href='adminhospitalview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not approved')</script>";
		}
	}
function hospital_reject($key)
	{
		 // $id=keytoid("login","lkey",$key);
		 // echo $id;exit;
		 $qry="update login set status='2' where id='".$key."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('rejected');
			window.location.href='adminhospitalview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not rejected')</script>";
		}
	}
	function select_data($c)
{
$id=keytoid("login","lkey",$c);
$qry="select * from police_registration inner join login on login.id=police_registration.loginid where login.id='".$id."'";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
}
return $arr;
}
	function update_data($stationid,$addressline1,$addressline2,$pincode,$district,$city,$contactno,$c)
{
	$id=keytoid("login","lkey",$c);
	// echo $id;exit;
	$qry="update police_registration set stationid='".$stationid."',addline1='".$addressline1."',addline2='".$addressline2."',pincode='".$pincode."',district='".$district."',city='".$city."',contactno='".$contactno."' where loginid='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function select_hospital($k)
{
$id=keytoid("login","lkey",$k);
$qry="select * from hospital_registration inner join login on login.id=hospital_registration.loginid where login.id='".$id."'";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
}
return $arr;
}
function update_hospital($a,$b,$c,$d,$e,$f,$k)
{
	$id=keytoid("login","lkey",$k);
	// echo $id;exit;
	$qry="update hospital_registration set hospitalname='".$a."',address='".$b."',pincode='".$c."',district='".$d."',city='".$e."',contactno='".$f."' where loginid='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function select_public($k)
{
$id=keytoid("login","lkey",$k);
$qry="select * from public_registration inner join login on login.id=public_registration.loginid where login.id='".$id."'";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
}
return $arr;
}
function update_public($a,$b,$c,$d,$e,$f,$g,$i,$k)
{
	$id=keytoid("login","lkey",$k);
	// echo $id;exit;
	$qry="update public_registration set fullname='".$a."',address='".$b."',pincode='".$c."',district='".$d."',city='".$e."',gender='".$f."',aadharno='".$g."',contactno='".$i."' where loginid='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function missingperson_reg($a,$b,$c,$d,$e,$f,$g,$i,$j,$k,$l,$m,$o,$p,$key)
	{
		// $enc=md5($password);
		// $key1=uniquekey("login","lkey");
		// $qry1="insert into login(lkey,email,password,usertype)values('".$key1."','".$email."','".$enc."','1')";
		// $exe1=mysql_query($qry1);
 $id=keytoid("login","lkey",$key);
		$key=uniquekey("missing_person","mkey");
       $date=date('Y-m-d');
		$qry="insert into missing_person(mkey,missingpersonname,address,pincode,district,city,gender,age,height,weight,bloodgroup,identificationmark,missingplace,missingdate,photo,otherdetails,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$i."','".$j."','".$k."','".$l."','".$m."','".$date."','".$o."','".$p."','".$id."')";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function data_fetch_missingperson()
	{
		$qry="select * from missing_person inner join  login on login.id=missing_person.loginid";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
              $path="uploads/".$rr["photo"];
			$rr['path']=$path;
			$arr[]=$rr;
		}
		return $arr;
	}
	function update_missingperson($a,$b,$c,$d,$e,$f,$g,$i,$j,$k,$l,$m,$o,$p,$key)

{
	$id=keytoid("missing_person","mkey",$key);
	// echo $id;exit;
	$qry="update missing_person set missingpersonname='".$a."',address='".$b."',pincode='".$c."',district='".$d."',city='".$e."',gender='".$f."',age='".$g."',height='".$i."' ,weight='".$j."',bloodgroup='".$k."',identificationmark='".$l."',missingplace='".$m."',photo='".$o."',otherdetails='".$p."' where missing_person.id='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function data_fetch_missingperson1($key)
	{
		$id=keytoid("missing_person","mkey",$key);
		$qry="select * from missing_person inner join  public_registration on public_registration.loginid=missing_person.loginid where missing_person.id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function delete_missingperson($key)
	{
		$id=keytoid("missing_person","mkey",$key);
		$qry="delete from missing_person where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='publicmissingview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	}
	function policeview_missingperson($c)
	{
		$id=keytoid("login","lkey",$c);
		$qry="select * from police_registration inner join login  on login.id=police_registration.loginid inner join missing_person on missing_person.pincode=police_registration.pincode where police_registration.loginid='".$id."'" ;
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
              
   //          $path="uploads/".$rr["photo"];
			// $rr['path']=$path;
			$arr[]=$rr;
		}
		return $arr;
	}
	function public_pass($g)
	{
		 $id=keytoid("missing_person","mkey",$g);
		 // echo $id;exit;
		 $qry="update missing_person set passstatus='1' where id='".$id."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('passed');
			window.location.href='policemissingview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not passed')</script>";
		}
	}
	function public_remove($g)
	{
	
		 $id=keytoid("missing_person","mkey",$g);
		 // echo $id;exit;
		 $qry="update missing_person set passstatus='0' where id='".$id."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('removed');
			window.location.href='policemissingview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('failed to remove')</script>";
		}
	}	
	function select_status1($g)
{
$id=keytoid("login","lkey",$g);
$qry="select * from missing_person inner join login on login.id=missing_person.loginid where passstatus='1'";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
}
return $arr;
}
function accident_reg($a,$b,$c,$d,$e,$f,$key)
{
		
        $id=keytoid("login","lkey",$key);
        // echo $id;exit;  
		$key=uniquekey("accident_registration","akey");
        // $id=keytoid("login","lkey",$key);
         $date=date('Y-m-d');
		$qry="insert into accident_registration(akey,district,city,street,pincode,accidentdetails,photo,loginid,currentdate)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$id."','".$date."')";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function select_accident($key)
	{
		$id=keytoid("login","lkey",$key);
		// echo $id;exit;
		$qry="select * from accident_registration inner join  login on login.id=accident_registration.loginid where accident_registration.loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function select_accident1($key)
	{
		$id=keytoid("accident_registration","akey",$key);
		// echo $id;exit;
		$qry="select * from accident_registration inner join  login on login.id=accident_registration.loginid where accident_registration.id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
  function update_accident($a,$b,$c,$d,$e,$f,$key)
{
	$id=keytoid("accident_registration","akey",$key);
	// echo $id;exit;
	$qry="update accident_registration set district='".$a."',city='".$b."',street='".$c."',pincode='".$d."',accidentdetails='".$e."',photo='".$f."' where id='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function policeview_accident($c)
{
	$id=keytoid("login",'lkey',$c);
	$qry="select * from police_registration inner join login  on login.id=police_registration.loginid inner join accident_registration on accident_registration.pincode=police_registration.pincode where police_registration.loginid='".$id."'" ;
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
}
function case_sheet($a,$b,$c,$d,$e,$f,$g,$i,$j,$key)
{
		
        // $id=keytoid("login","lkey",$key);
        // echo $id;exit;  
	 $id=keytoid("login","lkey",$key);

		$key=uniquekey("case_sheet","ckey");
       // echo $key;exit;
         $date=date('Y-m-d');
		$qry="insert into case_sheet(ckey,patientname,address,pincode,gender,age,bloodgroup,photo,otherdetails,admitteddate,loginid,currentdate)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$i."','".$j."','".$id."','".$date."')";
		 // echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function casesheet_view($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from case_sheet inner join  login on login.id=case_sheet.loginid where case_sheet.loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function update_casesheet1($c)
	{
		$id=keytoid("case_sheet","ckey",$c);
		// echo $id;exit;
		$qry="select * from case_sheet inner join  login on login.id=case_sheet.loginid where case_sheet.id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
function update_casesheet($a,$b,$c,$d,$e,$f,$g,$i,$j,$key)
{
$id=keytoid("case_sheet","ckey",$key);
	// echo $id;exit;
	$qry="update case_sheet set patientname='".$a."',address='".$b."',pincode='".$c."',gender='".$d."',age='".$e."',bloodgroup='".$f."',photo='".$g."',otherdetails='".$i."',admitteddate='".$j."' where id='".$id."'";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')
     	window.location.href='casesheetview.php'</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')
     	window.location.href='casesheetview.php'</script>";
     }
}
function fetch_casesheet($key)
	{
		$id=keytoid("case_sheet","ckey",$key);
		$qry="select * from case_sheet where login.id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function case_sheetdelete($key)
	{
		$id=keytoid("case_sheet","ckey",$key);
		$qry="delete from case_sheet where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='casesheetview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	}
	function enquirysel()
	{
		// $id=keytoid("login","lkey",$key);
		$qry="select * from hospital_registration";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
function enquiry($a,$b,$key)
	{
		
		        $id=keytoid("login","lkey",$key);

		$key=uniquekey("enquiry","ekey");
        // echo $id;exit;
        		$date=date('Y-m-d');
        // $qry1= "select loginid from hospital_registration"; 
		$qry="insert into enquiry(ekey,enquiry,hloginid,ploginid,currentdate,usertype)values('".$key."','".$b."','".$a."','".$id."','".$date."','1')";

		 // echo $qry;exit;
		$exe=mysql_query($qry);
		 //
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
function enquiry_view($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from enquiry inner join public_registration on public_registration.loginid=enquiry.ploginid  where enquiry.hloginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function publicview_enquiry($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from enquiry inner join login on login.id=enquiry.ploginid inner join hospital_registration on hospital_registration.loginid=enquiry.hloginid where enquiry.ploginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function enquiryedit_data()
	{
		// $id=keytoid("enquiry","ekey",$key);
		// echo $id;exit;
		// $qry="select * from enquiry inner join hospital_registration on hospital_registration.loginid=enquiry.hloginid where enquiry.id='".$id."'";
		$qry="select * from hospital_registration";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function enquiryedit_data1($key)
	{
		$id=keytoid("enquiry","ekey",$key);
		// echo $id;exit;
		$qry="select * from enquiry where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
function updateenquiry_data($a,$b,$key)
{
	$id=keytoid("enquiry","ekey",$key);
	// echo $id;exit;
	$qry="update enquiry set hloginid='".$a."',enquiry='".$b."' where id='".$id."'";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
}
function delete_enquiry($key)
	{
		$id=keytoid("enquiry","ekey",$key);
		$qry="delete from enquiry where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='enquirypublicview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	}
	function police_enquiry($a,$b,$key)
	{
		
		        $id=keytoid("login","lkey",$key);

		$key=uniquekey("enquiry","ekey");
        // echo $id;exit;
        		$date=date('Y-m-d');
        // $qry1= "select loginid from hospital_registration"; 
		$qry="insert into enquiry(ekey,enquiry,hloginid,ploginid,currentdate,usertype)values('".$key."','".$b."','".$a."','".$id."','".$date."','2')";

		 // echo $qry;exit;
		$exe=mysql_query($qry);
		 //
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function policeview_enquiry($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from enquiry inner join login on login.id=enquiry.ploginid inner join hospital_registration on hospital_registration.loginid=enquiry.hloginid where enquiry.ploginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function enquirypolice_select($key)
	{
		$id=keytoid("login","lkey",$c);
		$qry="select * from enquiry inner join login on login.id=enquiry.ploginid inner join hospital_registration on hospital_registration.loginid=enquiry.hloginid where enquiry.ploginid='".$id."'";
		echo $qry; exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function enquirypoliceedit_data($key)
	{
		$id=keytoid("enquiry","ekey",$key);
	// echo $id;exit;
	$qry="update enquiry set hloginid='".$a."',enquiry='".$b."' where id='".$id."'";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')
     	window.location.href='enquirypoliceview.php';
     	</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
	}







 function find($w)
    {
        $id=keytoid("missing_person","mkey",$w);
        $qry="select * from missing_person where id='".$id."'";
        $ex=mysql_query($qry);
        $rr1=null;
        $rr2=null;
        $rr3=null;
        $rr4=null;
        $rr5=null;
        $rr7=null;
        $path=null;
        while($k=mysql_fetch_array($ex))
        {
            $rr1=$k['missingpersonname'];
            $rr7=$k['bloodgroup'];
            $rr2=$k['gender'];
            $rr3=$k['age'];
            $rr4=$k['address'];
            //$rr5=$k['missingdate'];

             $path=$k["photo"];
        }
//echo $path;exit;
 
        //print_r($rr);exit;
    $qry12="select photo,ckey from case_sheet inner join hospital_registration on hospital_registration.loginid=case_sheet.loginid where patientname='".$rr1."' and case_sheet.address='".$rr4."' and bloodgroup='".$rr7."'";
      //echo $qry12;exit;
        $ex12=mysql_query($qry12);
        $path1=null;
        while($k12=mysql_fetch_array($ex12))
        {
            $key111=$k12['ckey'];
            $path1=$k12["photo"];
            //$k12['path1']=$path1;
        }
        //echo $k12;exit;
        if($path1!=null)
        {
            $class = new compareImages;
            $mmm=$class->compare('uploads/'.$w.'/'.$path,'uploads/'.$key111.'/'.$path1);
        //echo $mmm;exit;
        if($mmm==0)
        {
            $qry1="select * from case_sheet inner join hospital_registration on hospital_registration.loginid=case_sheet.loginid where patientname='".$rr1."' and bloodgroup='".$rr7."'";
     // echo $qry1;exit;
        $ex1=mysql_query($qry1);
        $rr6=array();
        while($k1=mysql_fetch_array($ex1))
        {
            $path="uploads/".$k1['ckey']."/".$k1["photo"];
            $k1['path']=$path;
            $rr6[]=$k1;
        }
       // print_r($rr6);exit;
        return $rr6;
        }
        else
        {
            $qry1="select * from case_sheet inner join hospital_registration on hospital_registration.loginid=case_sheet.loginid where patientname='".$rr1."' and  case_sheet.address='".$rr4."' and  bloodgroup='".$rr7."'";
     // echo $qry1;exit;
        $ex1=mysql_query($qry1);
        $rr6=array();
        while($k1=mysql_fetch_array($ex1))
        {
            $rr6[]=$k1;
        }
        //print_r($rr6);exit;
        return $rr6;
        }
    }
    else
    {
        $qry1="select * from case_sheet inner join hospital_registration on hospital_registration.loginid=case_sheet.loginid where patientname='".$rr1."' and case_sheet.address='".$rr4."' and bloodgroup='".$rr7."'";
     // echo $qry1;exit;
        $ex1=mysql_query($qry1);
        $rr6=array();
        while($k1=mysql_fetch_array($ex1))
        {
            $rr6[]=$k1;
        }
        //print_r($rr6);exit;
        return $rr6;
    }

      
    }












	function delete_policeenquiry($key)
	{
		$id=keytoid("enquiry","ekey",$key);
		$qry="delete from enquiry where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='enquirypoliceview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	}
	function policeenquiry_hospitalview($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from enquiry inner join police_registration on police_registration.loginid=enquiry.ploginid where hloginid='".$id."'";
		// echo $qry;exit;	
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function reply_link($a,$key)
{
	$id=keytoid("enquiry","ekey",$key);
	// echo $id;exit;
		// $key=uniquekey("enquiry","ekey");
		$qry="update enquiry set reply='".$a."' where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert(' successfull')
			window.location.href='policeenquiryhospitalview.php';
			</script>";
		}
        else {
        	echo"<script>alert('submission failed')";
        }
}
function replyview_enquiry($c)
{
	$id=keytoid("login","lkey",$c);
	// echo $id;exit;
	$qry="select * from enquiry  inner join  hospital_registration on hospital_registration.loginid=enquiry.hloginid where ploginid='".$id."'";
	// echo $qry;exit;
		$exe=mysql_query($qry);
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
		
}
function postmortem($file=null,$x)
{
	$id=keytoid("case_sheet","ckey",$x);
	$qry="update case_sheet set postmortem='".$file['name']."' where id='".$id."'";
	$d="uploads/".$x;
	
	$exe=mysql_query($qry);
	// echo $qry;exit;
	if($exe)
	{
		mkdir($d);
		move_uploaded_file($file["tmp_name"],$d."/".$file["name"]); 
		header("location:casesheetview.php");
		// echo"<script>alert('upload successful')</script>";
	}
	else
		echo"<script>alert('not succesfull')</script>";
}

function hospitalname()
{
	$qry="select * from hospital_registration";
	$exe=mysql_query($qry);
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;

}
function postmortem_request($a,$b,$c,$d,$e,$f,$g,$key)
{
        $id=keytoid("login","lkey",$key);
        // echo $id;exit;
		$key=uniquekey("postmortem_request","pmkey");
       $date=date('Y-m-d');
		$qry="insert into postmortem_request(pmkey,hospitalname,patientname,address,pincode,deathdate,age,gender,currentdate,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$date."','".$id."')";
		// echo $qry;exit;	
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function postmortemview_hospital($c)
	{
		$id=keytoid("login","lkey",$c);
		$qry="select * from police_registration inner join postmortem_request on postmortem_request.loginid=police_registration.loginid where postmortem_request.hospitalname='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function postmortemupload($file=null,$x)
	{
	$id=keytoid("postmortem_request","pmkey",$x);
	$qry="update postmortem_request set uploads='".$file['name']."' where id='".$id."'";
	// echo $qry;exit;
	$d="uploads/".$x;
	
	$exe=mysql_query($qry);
	// echo $qry;exit;
	if($exe)
	{
		mkdir($d);
		move_uploaded_file($file["tmp_name"],$d."/".$file["name"]); 
		header("location:postmortemrqstview.php");
		// echo"<script>alert('upload successful')</script>";
	}
	else
		echo"<script>alert('not succesfull')</script>";
}
function postmortemview_police($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from postmortem_request  where loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$path="uploads/".$rr['pmkey']."/".$rr["uploads"];
			$rr['path']=$path;

			$arr[]=$rr;
		}
		return $arr;
	}
	function select_message()
{
	$qry="select * from hospital_registration";
	$exe=mysql_query($qry);
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
}
function message($a,$b,$key)
{
	 $id=keytoid("login","lkey",$key);
        // echo $id;exit;  
		$key=uniquekey("message","msgkey");
        // $id=keytoid("login","lkey",$key);
         $date=date('Y-m-d');
         $time=date("h:i:sa");
		$qry="insert into message(msgkey,senderid, message,recieverid,currentdate,currenttime)values('".$key."','".$id."','".$b."','".$a."','".$date."','".$time."')";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function data_fetch_message($g)
	{
		$id=keytoid("login","lkey",$g);
		// echo $id;exit;
		$qry="select * from message inner join  police_registration on police_registration.loginid=message.senderid where message.recieverid='".$id."'";
		// echo $qry;exit;
			$exe=mysql_query($qry);
		
		$qry1="update message set viewstatus='1' where message.recieverid='".$id."'";
		$exe1=mysql_query($qry1);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}

	
		return $arr;
		
	}
	function select_message1($ab)
	{
		$id=keytoid("login","lkey",$ab);
		$qry="select * from message where message.senderid='".$id."'";
				// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function reply_message($a,$key,$ab)
{
	$id=keytoid("login","lkey",$ab);
        // echo $id;exit;  
		$key1=uniquekey("message","msgkey");
        // $id=keytoid("login","lkey",$key);
         $date=date('Y-m-d');
         $time=date("h:i:sa");
		$qry="insert into message(msgkey,senderid, reply,recieverid,currentdate,currenttime)values('".$key1."','".$id."','".$a."','".$key."','".$date."','".$time."')";
		echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
function replyhospital_view($c)
	{
		$id=keytoid("login","lkey",$c);
		$qry="select * from message  inner join  hospital_registration on hospital_registration.loginid=message.senderid  where message.recieverid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function policeview_message($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from message inner join  police_registration on police_registration.loginid=message.senderid where message.recieverid='".$id."'";
		// echo $qry;exit;
			$exe=mysql_query($qry);
		
		
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}

	
		return $arr;
	}
	function delete_message($key)
	{
		$id=keytoid("message","msgkey",$key);
		// echo $id;exit;
		$qry="delete from message where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='messageviewpolice.php'
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
	        }
	}
	function casereg($a,$b,$c,$d,$e,$f,$key)
   {
		
        $id=keytoid("login","lkey",$key);
        // echo $id;exit;  
		$key=uniquekey("cases","casekey");
        // $id=keytoid("login","lkey",$key);
         $date=date('Y-m-d');
         $time=time();
		$qry="insert into cases(casekey,cases,casedetails,occurenceday,occurencedate,occurencetime,occurenceplace,loginid,currentdate)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$id."','".$date."')";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('registration succesfull');
			window.location.href='casereg.php';
			</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function selectcase_data($key)
	{
		$id=keytoid("login","lkey",$key);
		// echo $id;exit;
		$qry="select * from cases  where cases.loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function case_data($key)
	{
		$id=keytoid("cases","casekey",$key);
		// echo $id;exit;
		$qry="select * from cases  where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function casereg_edit($a,$b,$c,$d,$e,$f,$key)
	{
		
	$id=keytoid("cases","casekey",$key);
	// echo $id;exit;
	$qry="update cases set cases='".$a."',casedetails='".$b."',occurenceday='".$c."',occurencedate='".$d."',occurencetime='".$e."',occurenceplace='".$f."' where loginid='".$id."' ";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull')</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
	}
    function case_delete($key)
    {
    	$id=keytoid("cases","casekey",$key);
		$qry="delete from cases where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='caseregview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	}
	function Policecase_select($key)
	{
		$id=keytoid("login","lkey",$key);
		// echo $id;exit;
		$qry="select * from public_registration inner join cases on cases.loginid=public_registration.loginid inner join police_registration on police_registration.pincode=public_registration.pincode where police_registration.loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function police_approvecase($g)
	{
		 $id=keytoid("cases","casekey",$g);
		 // echo $id;exit;
		 $qry="update cases set cstatus='1' where id='".$id."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('approved');
			window.location.href='policecaseview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not approved')</script>";
		}
	}

function police_rejectcase($key)
	{
		 $id=keytoid("cases","casekey",$key);
		 // echo $id;exit;
		 $qry="update cases set cstatus='2' where id='".$id."'";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		{
			echo"<script>alert('rejected');
			window.location.href='policecaseview.php';
			</script>";

		}
		else
		{
			echo"<script>alert('not rejected')</script>";
		}
	}
function firupload($file=null,$x)
{
	$id=keytoid("cases","casekey",$x);
	$qry="update cases set firupload='".$file['name']."' where id='".$id."'";
	$d="uploads/".$x;
	
	$exe=mysql_query($qry);
	// echo $qry;exit;
	if($exe)
	{
		mkdir($d);
		move_uploaded_file($file["tmp_name"],$d."/".$file["name"]); 
		header("location:policecaseview.php");
		// echo"<script>alert('upload successful')</script>";
	}
	else
		echo"<script>alert('not succesfull')</script>";
}
    function crime_history($a,$b,$c,$d,$e,$key)
    {
    	$id=keytoid("login","lkey",$key);
    	$date=date('Y-m-d');
    	$key=uniquekey("crime_history","crimekey");
    	$qry="insert into crime_history(crimekey,criminalname,address,age,gender,otherdetails,loginid,currentdate)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$id."','".$date."')";
    	 // echo $qry;exit;
    	$exe=mysql_query($qry);
    	if($exe)
		{
			echo"<script>alert('submitted succesfull');
			window.location.href='crimehistory.php';
			</script>";

		}
		else
		{
			echo"<script>alert('submission not successfull')</script>";
		}
    }
    function adminview_crime($c)
    {
    	
$qry="select * from crime_history";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
}
return $arr;
    }

   function crimehistoryupload($file=null,$x)
{
	$id=keytoid("crime_history","crimekey",$x);
	$qry="update crime_history set crimehistory='".$file['name']."' where id='".$id."'";
	$d="uploads/".$x;
	
	$exe=mysql_query($qry);
	// echo $qry;exit;
	if($exe)
	{
		mkdir($d);
		move_uploaded_file($file["tmp_name"],$d."/".$file["name"]); 
		header("location:admincrimeview.php");
		// echo"<script>alert('upload successful')</script>";
	}
	else
		echo"<script>alert('not succesfull')</script>";
}
    function crimehistoryview($c)
    {
       $id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from crime_history  where loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
    }
    function select_criminal($key)
    {
    	$id=keytoid("crime_history","crimekey",$key);
    	$qry="select * from crime_history  where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
            $path="uploads/".$rr['crimekey']."/".$rr["crimehistory"];
			$rr['path']=$path;
			$arr[]=$rr;
		}
		return $arr;
	
    }
    function updatecrime_history($a,$b,$c,$d,$e,$key)
    {
    	// echo $key;exit;
    	$id=keytoid("crime_history","crimekey",$key);
    	// echo "$id";exit;
    	$qry="update crime_history set criminalname='".$a."',address='".$b."',age='".$c."',gender='".$d."',otherdetails='".$e."' where id='".$id."'";
    	// echo $qry;exit;
    	 $exe=mysql_query($qry);
     
     if($exe)
     {
     	echo"<script>alert('updation successfull')
     	window.location.href='crimehistoryview.php';
     	</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
	}
    function crimehistoryview_police($c)
   {
	$id=keytoid("login","lkey",$c);
	$qry="select * from crime_history where loginid='".$c."'";
     echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
    }
    function complaintssel()
	{
		// $id=keytoid("login","lkey",$key);
		$qry="select * from complaints";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function complaint($a,$b,$key)
	{
		
		        $id=keytoid("login","lkey",$key);

		$key=uniquekey("complaints","complaintkey");
        // echo $id;exit;
        		$date=date('Y-m-d');
        // $qry1= "select loginid from hospital_registration"; 
		$qry="insert into complaints(complaintkey,subject,complaint,currentdate,loginid)values('".$key."','".$b."','".$a."','".$date."','".$id."')";

		 // echo $qry;exit;
		$exe=mysql_query($qry);
		 //
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function complaint_view($c)
	{
		$id=keytoid("login","lkey",$c);
		// echo $id;exit;
		$qry="select * from complaints  where loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		// echo $exe;exit;
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function select_complaint($k)
	{
		$id=keytoid("complaints","complaintkey",$k);
		// echo $id;exit;
		$qry="select * from complaints  where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function update_complaint($a,$b,$k)
	{
		$id=keytoid("complaints","complaintkey",$k);
	// echo $id;exit;
	$qry="update complaints set subject='".$a."',complaint='".$b."' where id='".$id."'";
	// echo $qry;exit;
     $exe=mysql_query($qry);
     // $qry1="update login set email='".$email."' where id='".$id."' ";
     // $exe1=mysql_query($qry1);
     if($exe)
     {
     	echo"<script>alert('updation successfull');
     	window.location.href='complaintview.php';
     	</script>";
     }
     else
     {
     	echo "<script>alert('updation not succcessfull')</script>";
     }
	}
	 function delete_complaint($key)
	 {
	 	$id=keytoid("complaints","complaintkey",$key);
		$qry="delete from complaints where id='".$id."' ";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='complaintview.php';
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
		}
	 }
	 function adminview_complaint($c)
	 {
	 	$qry="select * from complaints  inner join  public_registration on public_registration.loginid=complaints.loginid order by complaints.id DESC";
        // echo $qry;exit;
        $exe=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
       {
	           $arr[]=$rr;
       }
              return $arr;
	 }
	 function reply_complaint($a,$key)
	 {
	 	$id=keytoid("complaints","complaintkey",$key);
	// echo $id;exit;
		// $key=uniquekey("enquiry","ekey");
		$qry="update complaints set reply='".$a."' where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert(' successfull')
			window.location.href='adminviewcomplaint.php';
			</script>";
		}
        else {
        	echo"<script>alert('submission failed')";
        }
	 }
	 function replyview_public($c)
	 {
	 	$id=keytoid("login","lkey",$c);
	// echo $id;exit;
	$qry="select * from complaints  where loginid='".$id."'";
	// echo $qry;exit;
		$exe=mysql_query($qry);
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
		
	 }
	function passstatus_view()
	{
		
		 // echo $id;exit;
		 $qry="select * from  missing_person";
		 // echo $qry;exit;
		 $exe=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
       {
	           $arr[]=$rr;
       }
              return $arr;
	}
	function found($a,$b,$c,$d,$e,$f,$g)
	{
      
		$key=uniquekey("found","fkey",$g);
        // echo $key;exit;
        		$date=date('Y-m-d');
		$qry="insert into found(fkey,name,address,contactno,aadharno,founddetails,foundeddate,currentdate)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$date."')";

		 // echo $qry;exit;
		$exe=mysql_query($qry);
		 //
		if($exe)
		{
			echo"<script>alert('registration succesfull')</script>";

		}
		else
		{
			echo"<script>alert('registration not successfull')</script>";
		}
	}
	function policeview_found()
	{
		// $id=keytoid("login","lkey",$c);
	// echo $id;exit;
	$qry="select * from found  ";
	// echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	}
	function queries_link($a,$key)
	{
		$id=keytoid("postmortem_request","pmkey",$key);
	// echo $id;exit;
		// $key=uniquekey("enquiry","ekey");
		$qry="update postmortem_request set queries='".$a."' where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('  send successfull')
			window.location.href='postmortempoliceview.php';
			</script>";
		}
        else {
        	echo"<script>alert('failed to send')";
        }
	}
	function replytoqueries($a,$key)
	{
		$id=keytoid("postmortem_request","pmkey",$key);
	// echo $id;exit;
		// $key=uniquekey("enquiry","ekey");
		$qry="update postmortem_request set reply='".$a."' where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('send successfull')
			window.location.href='postmortemrqstview.php';
			</script>";
		}
        else {
        	echo"<script>alert('failed to send')";
        }

	}
	function crime_historydelete($key)
	{
		$id=keytoid("crime_history","crimekey",$key);
		// echo $id;exit;
		$qry="delete from crime_history where id='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('deletion successfull')
			window.location.href='crimehistoryview.php'
			</script>";
		}
		else{
              echo"<script>alert('deletion failed')</script>";
	        }
	}
}
   
?>
