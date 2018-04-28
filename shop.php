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
<h2>Shop Form</h2>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"><form action="post_shop.php" method="POST"  class="log-form" enctype="multipart/form-data" style="padding:10px 15px;">
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="form-group">
    <label for="uname"><b>Shop area (in Sqr.ft)</b></label>
    <input type="text" class="form-control" placeholder="Enter area" name="SqFt" required>
</div> <div class="form-group">
    <label for="uname"><b>Address</b></label>
    <input type="address" class="form-control" placeholder="Enter Address" name="Address" required>
</div> <div class="form-group">
    <label for="uname"><b>Rent</b></label>
    <input type="text" class="form-control" placeholder="Enter Rent " name="Rent" required>
</div> <div class="form-group">
    <label for="uname"><b>Shop available For:</b></label><br/>
    <input type="checkbox" name="FD1[]" value="ATM" multiple>ATM 
  <input type="checkbox" name="FD1[]" value="Bank" multiple>Bank
  <input type="checkbox" name="FD1[]" value="Godown" multiple>Godown
  <input type="checkbox" name="FD1[]" value="Business" multiple>Business
  <input type="checkbox" name="FD1[]" value="Workshop" multiple>Workshop
  <input type="checkbox" name="FD1[]" value="Office" multiple>Office
</div> <div class="form-group">
    <label for="uname"><b>Availability From</b></label>
    <input type="date" class="form-control" placeholder="Enter date" name="Adate" required>
</div> <div class="form-group">
    <label for="uname"><b>Nearby Business Details</b></label>
    <input type="text" class="form-control" placeholder="Enter details" name="NBB" required>
</div> <div class="form-group">
    <label for="uname"><b>Floor</b></label>
    <input type="number" class="form-control" placeholder="Enter value" name="Floor" required>
</div>
<div class="form-group">
    <label for="uname"><b>Total Floor</b></label>
    <input type="number" class="form-control" placeholder="Enter value" name="TFloor" required>
</div>
     <div class="form-group">

    <label for="psw"><b>Description</b></label>
<textarea name="" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group"> 
                  <label for="psw"><b>Add Images</b></label>
                  <input class="form-group " type='file' id="upload" name="image" />
                  </div>
           <div class="form-group">

    <button type="submit" name="login" class="button" value="Shop">Submit</button>
        </div>
           

  
</form>
</div>
    <div class="col-md-3"></div>
</div>

</div>
<?php
    
    include 'footer.php';
    ?>