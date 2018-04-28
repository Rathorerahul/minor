<?php
?>
<?php 
session_start();
if(isset($_POST['description']))
{   include 'connect.php';
    
    $ar=Fetch("SELECT id from userinfo where email='".$_SESSION['email']."'");
if(count($ar)<=0){




}    

$t = "feedback";
if(Insert($_POST,$t)){	
    
//$result=Fetch("SELECT * from propertyinfo where uid='".$_POST['uid']."'");

  //  if(count($result)==1){

    //  $row=$result[0];

     {
        //$_SESSION['id']=$row['uid'];
        //echo "property entered suceess\n";
        header("location:index.php");
      }

      header("location:index.php");
}
}else{

echo "Error in Query Building";

}

?>