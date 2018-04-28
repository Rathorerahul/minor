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
$t = "PG";
for($i =0 ;$i<count($_POST['FD1']);$i++)
{
	$x = $_POST['FD1'];
	
	
}
if($_POST['bath']=="yes" && $_POST['bal']=="yes")
{
	$str="Attached Bathroom: Yes \n Attached Balcony: Yes";
}
else if (($_POST['bath']=="no" && $_POST['bal']=="yes")
{
	$str="Attached Bathroom: No \n Attached Balcony: Yes";
}
else if($_POST['bath']=="yes" && $_POST['bal']=="no")
{
	$str="Attached Bathroom: Yes \n Attached Balcony: No";
}
else 
{
	$str="Attached Bathroom: No \n Attached Balcony: No";
}
$_POST['AB']= $str;
unset($_POST['FD1']);
unset($_POST['login']);
unset($_POST['bath']);
unset($_POST['bal']);
/*$tz=date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());
$_POST['PostedDate']= date('m/d/Y' ,time());*/
$_POST['FD']= implode(' ',$x);
if(Insert($_POST,$t)){	
    
//$result=Fetch("SELECT * from propertyinfo where uid='".$_POST['uid']."'");

  //  if(count($result)==1){

    //  $row=$result[0];

     {
        //$_SESSION['id']=$row['uid'];
        echo "property entered suceess\n";
      }

      //header("location:main_page.php");
}
}else{

echo "Error in Query Building";

}

?>