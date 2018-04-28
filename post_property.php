<?php
/*$uid =$_SESSION['']
$ptype = input($conn,$_POST['name']);
$address = input($conn,$_POST['name']);	
$cityId = input($conn,$_POST['name']);
$areaId = input($conn,$_POST['name']);
$sqFt = input($conn,$_POST['name']);
$budget = input($conn,$_POST['name']);
$bhk 	= input($conn,$_POST['name']);
$description = input($conn,$_POST['name']); 	
$furniture 	= input($conn,$_POST['name']);
$floor 	= input($conn,$_POST['name']);
$totalFloor = input($conn,$_POST['name']);
$constructionAge = input($conn,$_POST['name']);
$facing = input($conn,$_POST['name']);	
$image = input($conn,$_POST['name']);	
$title = input($conn,$_POST['name']);
$status = input($conn,$_POST['name']);	
$availableFor = input($conn,$_POST['name']);
$posteddate = input($conn,$_POST['name']);
*/?>
<?php 
session_start();
if(isset($_POST['ptype']))
{   include 'connect.php';
    
    $ar=Fetch("SELECT id from userinfo where email='".$_SESSION['email']."'");
if(count($ar)<=0){
    exit();



}    
$f_name= $_FILES['image']['name'];

			if($f_name){

							$f_loc = $_FILES['image']['tmp_name'];
							$f_size = $_FILES['image']['size'];
							$f_extension = explode('.',$f_name);
							$f_extension = strtolower(end($f_extension));
							$f_newname =input(uniqid().'.'.$f_extension);
							$store  = "uploads/".$f_newname;
							if($f_extension =='jpg'||$f_extension =='png'||$f_extension =='jpeg'||$f_extension =='gif')
							{
									if($f_size>=20000000) { echo "Image Size must Be less than 20MB"; exit(); }

									else
									{
										 if(move_uploaded_file($f_loc,$store))
												{												  
															$_POST['image'] = $f_newname;													
												}
									}
							}
			}
$t = "hostel";
echo $_SESSION['id']."\n";
$_POST['uid']=$_SESSION['id'];
$ar=Fetch("SELECT cityId from city where cityName='".$_POST['city']."'");
foreach ($ar as $k)
{
	extract($k);
}
$_POST['cityId']= $cityId;
$_POST['areaId']=4;
$_POST['posteddate']=date("Y-m-d");

for($i =0 ;$i<count($_POST['FD1']);$i++)
{
	$x = $_POST['FD1'];
	
	
}
unset($_POST['FD1']);
unset($_POST['city']);
unset($_POST['bal']);
unset($_POST['bath']);
unset($_POST['Descriptions']);
unset($_POST['locality']);

$_POST['FD']= implode(' ',$x);
if(Insert($_POST,$t)){	
    
$result=Fetch("SELECT * from propertyinfo where uid='".$_POST['uid']."'");

    if(count($result)==1){

      $row=$result[0];

     {
        $_SESSION['id']=$row['uid'];
        echo "property entered suceess\n";

      }

      //header("location:main_page.php");
}
}else

echo "Error in Query Building";

}

?>