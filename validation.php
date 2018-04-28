<?php 
include 'connect.php';
?>
<?php
if(isset($_POST['email']))
{
    session_start();
    $_POST['password']=hash('sha256',$_POST['password']);
 /*   $name =input($conn,$_POST['name']);
    //echo " name is $name <br >" ;
    $email =input($conn,$_POST['email']);
    //echo $email;
	$pass =input($conn,$_POST['password']);
    $contact =input($conn,$_POST['contact']);
    $ct = input($conn,$_POST['ct']);*/
    $ar=Fetch("SELECT * from userinfo where email='".$_POST['email']."'");

if(count($ar)>0){

		echo "Email Already Exist";

		exit();

}
//echo Insert($_POST);
//    		exit();
//$_POST['id']= 50;
    
if(Insert($_POST)){	
    
$result=Fetch("SELECT email,id from userinfo where email='".$_POST['email']."'");

    if(count($result)==1){

      $row=$result[0];

     {

        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];

      }
//        print_r($row);
//     var_dump($_SESSION);
      header("location:index.php");
}
//print_r($_POST);
//		header('Location: profile_login.php');
}else

echo "Error in Query Building";

}

	
//  $pass = hash('sha512', $pass);
    /*function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    //echo "output is $output<br>";
    return $output;

}*/
//$encrypted_pass = my_simple_crypt( $pass, 'e' );
//echo "$encrypted_pass <br>";
//  print_r($_FILES);
/*$f_name= $_FILES['image']['name'];
                $f_loc = $_FILES['image']['tmp_name'];
                $f_size = $_FILES['image']['size'];
                $f_extension = explode('.',$f_name);
                $f_extension = strtolower(end($f_extension));
                $f_newname =input($conn,uniqid().'.'.$f_extension);
                $store  = "Uploads/".$f_newname;
                if($f_extension =='jpg'||$f_extension =='png'||$f_extension =='jpeg'||$f_extension =='gif')
                {
                    if($f_size>=20000000)
                    {
                        header ("location:index.php");

//                        echo "out of limit";
                    }
                    else
                    {
                       if(move_uploaded_file($f_loc,$store))
                          {
                             // echo "sucess";
                          }
                    }
                }
    
//	print_r($_POST);
//	print_r($_FILES);
	
//}*///
/*$query= "INSERT INTO userinfo (name, email, password, mobile, customertype) VALUES ('$name','$email','$encrypted_pass ','$contact','$ct')";
$result= mysqli_query($conn,$query);
if($result){
    echo "You are Register Successfully";
  echo  $_SESSION['user']= $email;
    
//	$msg = "<script type='text/javascript'>alert('submitted successfully!')</script>";
//  $success = "Message successfully sent";
	header("location:main_page.php");

}
}
else 
echo "not working";*/
?>
<?php

?>