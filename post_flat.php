<?php
?>
<?php 
session_start();

if(isset($_POST['login']))
{   include 'connect.php';
    
    $ar=Fetch("SELECT id from userinfo where email='".$_SESSION['email']."'");
if(count($ar)<=0){
    exit();



}    
$f_name= $_FILES['image']['name'];
echo $f_name;
			if($f_name){

							$f_loc = $_FILES['image']['tmp_name'];
							$f_size = $_FILES['image']['size'];
							$f_extension = explode('.',$f_name);
							$f_extension = strtolower(end($f_extension));
							$f_newname =input(uniqid().'.'.$f_extension);
							$store  = "uploads/".$f_newname;
							if($f_extension =='jpg'||$f_extension =='png'||$f_extension =='jpeg'||$f_extension =='gif' ||$f_extension =='jfif')
							{
									if($f_size>=20000000) { echo "Image Size must Be less than 20MB"; exit(); }

									else
									{
										 if(move_uploaded_file($f_loc,$store))
												{												  
															$_POST['Images'] = $f_newname;													
												}
									}
							}
			}
$t = "flat";
/*for($i =0 ;$i<count($_POST['FD1']);$i++)
{
	$x = $_POST['FD1'];
	
	
}
unset($_POST['FD1']);*/
unset($_POST['login']);
/*$tz=date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());
$_POST['PostedDate']= date('m/d/Y' ,time());
$_POST['AvailableFor']= implode(' ',$x);*/
if(Insert($_POST,$t)){	
    
$result=Fetch("SELECT pid from $t ORDER BY pid DESC LIMIT 1");
	
		foreach($result as $k)
		  extract($k);
		echo "property entered suceess\n";
		$value['ptype']='flat';
		$value['uid']=$_SESSION['id'];
		$value['pfor']='Rent';
		$value['posteddate']=date("Y-m-d");
		$value['pid']= $pid."|".'flat';
		$t='propertyinfo';
		if(Insert($value,$t))
		{
			echo "property entered suceess\n";
		}
      }

      //header("location:main_page.php");
}

else{

echo "Error in Query Building";

}

?>