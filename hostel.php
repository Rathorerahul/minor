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
<h2>Hostel Form</h2>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"><form action="user_check.php" method="POST"  class="log-form" enctype="multipart/form-data" style="padding:10px 15px;">
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="form-group">
    <label for="uname"><b>Hostel Name</b></label>
    <input type="text" class="form-control" placeholder="Enter hostel name" name="hname" required>
</div> <div class="form-group">
    <label for="uname"><b>Address</b></label>
    <input type="address" class="form-control" placeholder="Enter address" name="address" required>
</div> <div class="form-group">
    <label for="uname"><b>Hostel For</b></label>
    <!--input type="text" class="form-control" placeholder="Enter email" name="email" required-->
    <select class="form-control" placeholder="select option" name="hfor" required>
    <option value="Boys">Boys</option>
    <option value="Girls">Girls</option>
    <option value="Both">Both</option>
  </select>
</div> <div class="form-group">
    <label for="uname"><b>Rooms/Beds Available</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="availability" required>
</div> <div class="form-group">
    <label for="uname"><b>Charges </b></label>
    <input type="number" class="form-control" placeholder="Enter value" name="charges" step=100 max=10000 required>
</div> <div class="form-group">
    <label for="uname"><b>service provided</b></label><br>
    <input type="checkbox" name="FD1[]" value="Cupboards" multiple>Mess 
  <input type="checkbox" name="FD1[]" value="Study Table" multiple> Study Table
  <input type="checkbox" name="FD1[]" value="AC," multiple> AC
  <input type="checkbox" name="FD1[]" value="Geyser" multiple> Geyser
  <input type="checkbox" name="FD1[]" value="Washing Machine," multiple> Washing Machine
  <input type="checkbox" name="FD1[]" value=" Wifi" multiple> Wifi
  <input type="checkbox" name="FD1[]" value="Fridge" multiple>Parking
  <input type="checkbox" name="FD1[]" value="Cooler" multiple> Cooler
  <input type="checkbox" name="FD1[]" value="TV" multiple>TV </div>
     <div class="form-group">

    <label for="psw"><b>Description</b></label>
<textarea name="" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
                  </div> 
                  <label for="" class="">
                                    <input class="form-group " type='file' id="upload" name="image" onchange="readURL(this)" />
                                    </label>

           <div class="form-group">

    <button type="submit"  class="button" value="Submit">Submit</button>
        </div>
           

  
</form>
</div>
    <div class="col-md-3"></div>
</div>

</div>
<?php
    
    include 'footer.php';
    ?>