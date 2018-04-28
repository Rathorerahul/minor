<?php
//if($flag==0)

session_start();
include 'connect.php';
echo $_SESSION['email'];
if(empty($_SESSION['email'])){
  echo"not logged in";
}
    //header("location:user_login.php");
    else
  {
?>
<div>
    <h1>Welcome <?php echo $_SESSION['email'];?></h1>
    <a href="addproperty.php"><strong>Post Property</strong></a>
    <a href="delete.php"><strong>delete property </strong></a>
    <a href="update.php"><strong>Update property Information </strong></a>
    <a href="show_info.php"><strong>Show property Information </strong></a>
    <!--a href="add_new.php">Add labour</a-->
    <a  href="logout.php" >logout</a>
</div>
<?php
  }
  ?>