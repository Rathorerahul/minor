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

.button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button:hover {
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
    <div class="col-md-6 bg-form">
    <ul class="nav nav-tabs all-form">
    <li class="active"><a data-toggle="tab" href="#Room">PG Form</a></li>
    <li><a data-toggle="tab" href="#Hostel">Hostel</a></li>
    <li><a data-toggle="tab" href="#Shop">Shop</a></li>
    <li><a data-toggle="tab" href="#Flat">Flat</a></li>
  </ul>

  <div class="tab-content">
    <div id="Room" class="tab-pane fade in active">
       <form action="post_PG.php" method="POST" class="log-form" enctype="multipart/form-data" style="padding:10px 15px;"> 
    <div class="for-head text-center">
<h2>PG Form</h2>
</div>
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="form-group">
    <label for="uname"><b>Hostel Name</b></label>
    <input type="text" class="form-control" placeholder="Enter hostel name" name="Name" required>
</div> <div class="form-group">
    <label for="uname"><b>Address</b></label>
    <input type="address" class="form-control" placeholder="Enter address" name="Address" required>
</div> <div class="form-group">
    <label for="uname"><b>Hostel For</b></label>
    <!--input type="text" class="form-control" placeholder="Enter email" name="email" required-->
    <select class="form-control" placeholder="select option" name="HostelFor" required>
    <option value="Boys">Boys</option>
    <option value="Girls">Girls</option>
    <option value="Both">Both</option>
  </select>
</div> <div class="form-group">
    <label for="uname"><b>Rooms/Beds Available</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="Availability" required>
</div> <div class="form-group" style="width:50%;">
    <label for="uname"><b>Charges </b></label>
    <input type="number" class="form-control" placeholder="Enter value" name="Charges" step=100 max=10000  required>
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
<textarea name="Description" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
                  </div> 
                  <label for="" class="">
                                    <input class="form-group " type='file' id="upload" name="image" />
                                    </label>

        <div class="form-group">
            <button type="submit" class="button" value="Submit" >Submit</button>
        </div>

  
</form>
    </div>
    <div id="Hostel" class="tab-pane fade">
         <form action="post_hostel.php" method="POST" class="log-form" enctype="multipart/form-data" style="padding:10px 15px;"> 
    <div class="for-head text-center">
<h2>Hostel Form</h2>
</div>
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

    <div class="form-group">
    <label for="uname"><b>Hostel Name</b></label>
    <input type="text" class="form-control" placeholder="Enter hostel name" name="Name" required>
</div> <div class="form-group">
    <label for="uname"><b>Address</b></label>
    <input type="address" class="form-control" placeholder="Enter address" name="Address" required>
</div> <div class="form-group">
    <label for="uname"><b>Hostel For</b></label>
    <!--input type="text" class="form-control" placeholder="Enter email" name="email" required-->
    <select class="form-control" placeholder="select option" name="HostelFor" required>
    <option value="Boys">Boys</option>
    <option value="Girls">Girls</option>
    <option value="Both">Both</option>
  </select>
</div> <div class="form-group">
    <label for="uname"><b>Rooms/Beds Available</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="Availability" required>
</div> <div class="form-group" style="width:50%;">
    <label for="uname"><b>Charges </b></label>
    <input type="number" class="form-control" placeholder="Enter value" name="Charges" step=100 max=10000  required>
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
<textarea name="Description" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
                  </div> 
                  <label for="" class="">
                                    <input class="form-group " type='file' id="upload" name="image" />
                                    </label>

        <div class="form-group">
            <button type="submit" class="button" value="Submit" >Submit</button>
        </div>

  
</form>

    </div>
    <div id="Shop" class="tab-pane fade">
        <form action="post_shop.php" method="POST" class="log-form" enctype="multipart/form-data" style="padding:10px 15px;"> 
    <div class="for-head text-center">
<h2>Shop Form</h2>
</div>
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
    <input type="number" class="form-control" placeholder="Enter Rent " name="Rent" step=100 max=50000 min=1000 required>
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
    <input type="date" class="form-control" placeholder="Enter date" name="AvailableFrom" required>
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
<textarea name="Description" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
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
    <div id="Flat" class="tab-pane fade">
         <form action="post_flat.php" method="POST" class="log-form" enctype="multipart/form-data" style="padding:10px 15px;"> 
    <div class="for-head text-center">
<h2>Flat Form</h2>
</div>
  <div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/785748929807781888/NViWqbkH_400x400.jpg" alt="Avatar" class="avatar">
  </div>

    <div class="form-group">
  <label for="uname"><b>Name of Society/Locality</b></label>
    <input type="text" class="form-control" placeholder="Enter Locality" name="Name" required>
</div>
  <div class="form-group">
  <label for="uname"><b>Address</b></label>
    <input type="text" class="form-control" placeholder="Enter email" name="Address" required>
</div>
  <div class="form-group">
    <label for="uname"><b>No of Bathrooms</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="Bathrooms" min=0 max=100 required>
</div> <div class="form-group">
    <label for="uname"><b>No of Bedrooms</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="BHK" min=0 max=100 required>
</div> <div class="form-group">
    <label for="uname"><b>No of Balcony</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="Balcony" required>
</div> <div class="form-group">
    <label for="uname"><b>Floor No</b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="Floor" required>
</div> <div class="form-group">
    <label for="uname"><b>Total Floor </b></label>
    <input type="number" class="form-control" placeholder="Enter number" name="TFloor" required>
</div>
<div class="form-group">
    <label for="uname"><b>Available For</b></label>
    <select class="form-control" placeholder="select option" name="AFor" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Both">Both</option>
  </select>
</div><div class="form-group">
    <label for="uname"><b>Tenants you prefer</b></label>
    <select class="form-control" placeholder="select option" name="Tenants" required>
    <option value="Students">Students</option>
    <option value="professionals">Professionals</option>
    <option value="Family">Family</option>
    <option value="Family">Bachelors</option>
  </select>
</div>
 <div class="form-group">
    <label for="uname"><b>Availability From</b></label>
    <input type="date" class="form-control" placeholder="Enter date" name="AFrom" required>
</div> <div class="form-group">
     <div class="form-group">
    <label for="uname"><b>Rent</b></label>
    <input type="text" class="form-control" placeholder="Enter monthly rent " name="Rent" required>
</div>
     <div class="form-group">

    <label for="psw"><b>Description</b></label>
<textarea name="Description" id="" class="form-control" cols="10" rows="2" placeholder="Description"></textarea>
                  </div> 
                  <div class="form-group"> 
                  <label for="psw"><b>Add Images</b></label>
                  <input class="form-group " type='file' id="upload" name="image" />
                  </div>
           <div class="form-group">

    <button type="submit" name="login"  class="button" value="Flat">Submit</button>
        </div>
           
</form>

    </div>
  </div>
    
    
   
   </div>
    <div class="col-md-3"></div>
</div>

</div></div>
<?php
    
    include 'footer.php';
    ?>

