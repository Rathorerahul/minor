<!--<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.8;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body> -->

<?php
include 'header.php';
include 'navbar.php';

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.log-form {
    
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
<div class="wrappper">
<div class="container for-register" >

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 bg-form"><form action="validation.php" method="POST" class="log-form" enctype="multipart/form-data" style="padding:10px 15px;"> 
    <div class="for-head text-center">
<h2>Register Here</h2>
</div>
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="form-group">
            <label><strong> Name</strong></label>
        <input type="text" name="name" class="form-control" required  placeholder="Name">
        </div>
        <div class="form-group">
        <label for=""><strong>E-mail</strong></label>
        <input type="email" name="email" class="form-control" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        </div>
        <div class="form-group">
        <label for=""><strong>Password</strong></label>
        <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{6,}" title="Six or more characters" required>
        </div>
        <div class="form-group">
        <label for="">Mobile</label>
        <input type="tel" name="mobile" class="form-control" pattern=".{10,}" title="10 digit mobile number" placeholder="Mobile No" required>
        </div>
        <div class="form-group">
            <label class="radio-inline">
                  <input type="radio" name="customertype" value="Buyer/owner">Buyer/owner            </label>
            <label class="radio-inline">
                  <input type="radio" name="customertype" value="Builder">Builder
            </label>
            <label class="radio-inline">
                  <input type="radio" name="customertype" value="Agent">Agent
            </label>
        </div>
        <div class="form-group">
            <button type="submit" value="Submit" class="">Submit</button>
        </div>

  
</form>
</div>
    <div class="col-md-3"></div>
</div>

</div></div>
<?php
    
    include 'footer.php';
    ?>

