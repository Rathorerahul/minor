<?php
include 'header.php';
include 'navbar.php';

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.log-form {border: 3px solid #f1f1f1;
    
	padding: 10px 15px;
	margin-bottom: 15px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 10%;
}


span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<div class="container" >
<div class="for-head text-center">
<h2>Login Form</h2>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"><form action="user_check.php" method="POST"  class="log-form" enctype="multipart/form-data" style="padding:10px 15px;">
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="form-group">
    <label for="uname"><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter email" name="email" required>
</div>
     <div class="form-group">

    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
        </div>
           <div class="form-group">

    <button type="submit" name="login" value="login">Login</button>
        </div>
            <div class="form-group">

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="form-group">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
    <div class="col-md-3"></div>
</div>

</div>
<?php
    
    include 'footer.php';
    ?>