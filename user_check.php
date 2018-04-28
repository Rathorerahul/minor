<?php
  session_start();
  if(isset($_POST["login"]))
  { 
    include_once "connect.php";
    $email = input($_POST['email']);
    $pwd = hash('sha256',$_POST['password']);
    $result = Fetch("SELECT * FROM userinfo WHERE email = '$email' and password = '$pwd'");

  if(count($result)==1){

      $row=$result[0];

      
        $_SESSION['email']= $row['email'];
        $_SESSION['id']= $row['id'];
     

      header("location:index.php");

  }else{

    echo "Invalid Credentials";

  }
}else{
  echo "No Post data Received";
}

   /*   echo $username= mysqli_real_escape_string ($conn,$_POST["uname"]);
      echo $password= $_POST["password"];
      
    $encrypted_pass = my_simple_crypt( $password, 'e' );
      
      $sqlr = "select * from userinfo where email = '$username' and password = '$encrypted_pass'";
      /*$result = $conn->query($sqlr);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " username: " . $row["uname"]. " password: " . $row["password"]. "<br>";
 
    }
}
else {
    echo "0 results";
}*/
//$conn->close();
/*$result = Execute($sqlr);
      $check =mysqli_num_rows($result);
      if($check==1)
      { $row = mysqli_fetch_assoc($result);
          print_r($row['email']);
       $_SESSION['user']=$row['email'];
       header("location:main_page.php");
      //("admin_page.php");
      }
      else
      {
          echo "please enter correct username or password";
      }
      
  }*/
?>  s