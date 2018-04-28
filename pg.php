<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script>
    function show(){
        if((document.getElementById("pfor").checked))
        {
           document.getElementById("rform").style.display='block';
        }
        else {
            document.getElementById("rform").style.display='block';
        }
    }
    </script>
</head>
<body>
<div id="fullform">
    <form action="post_property.php" method="POST"  enctype="multipart/form-data">
            <label><strong> Property Info</strong></label><br/><hr>
            <label><strong>Property For</strong></label><br/>
            <div id="pfor" onclick()="show();">
  <input type="radio" name="pfor" value="Sale" id="pfor" onclick()="show();"> Sale
  <input type="radio" name="pfor" value="Rent"id="pfor" onclick()="show();"> Rent 
  <input type="radio" name="pfor" value="PG" id="pfor" onclick()="show();"> PG 
  </div>
            <label><strong> property type</strong></label><br/>
          <div>  <select name="ptype">
            <option value="" selected>Select Property Type</option>
    <option value="Hostel">Hostel</option>
    <option value="PG">PG</option>
    <option value="residentail house">Residential House</option>
    <option value="flat">Flat</option>
    <option value="room">Rooms</option>
    <option value="shop">Shop</option>
  </select></div>
            <br/><br/>
            <label><strong> City</strong></label><br/>
            <select name="city">
            <option value="" selected>Select Your  City/Town</option>
    <option value="Indore">Indore</option>
    <option value="Dewas">Dewas</option>
    <option value="Rau">Rau</option>
    <option value="Pithampur">Pithampur</option>
    <option value="Mhow">Mhow</option>
  </select><br/>
            <label><strong>Locality</strong></label><br/>
            <input type="text" name="locality" placeholder="Enter Locality"><br/><br/>
                <label><strong> Address</strong></label><br/>
            <input type="text" name="address" placeholder="enter your property address"><br/><br/>
           <hr>
           <hr>
           <div id="rform" style="display">
           <label><strong> Property Feature</strong></label><br/>
           <hr>
           <label><strong> Floor No</strong></label><br/>
           <select name="floor">
           <option value="">Select</option>
           <option value="-2">Lower Basement</option>
           <option value="-1">Upper Basement</option>
           <option value="0">Ground</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select><br>
  <label><strong> Total Floors</strong></label><br/>
           <select name="totalFloor">
           <option value="">Select</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select><br>
  <label><strong> Available For</strong></label><br/>
           <select name="availableFor">
           <option value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Both">Both</option>
  </select><br>
  <label><strong> Occupancy</strong></label><br/>
           <select name="Descriptions">
           <option value="">Select</option>
    <option value="single">Single</option>
    <option value="sharing">Sharing</option>
    <option value="Both">Both</option>
  </select><br>
  <label><strong>Tenants You Prefer</strong></label><br/>
           <select name="tenants">
           <option value="">Select</option>
    <option value="professional">Professionals</option>
    <option value="student">Student</option>
    <option value="Both">Both</option>
  </select><br>
  <label><strong> No of Rooms</strong></label><br/>
           <select name="bhk">
           <option value="">Select</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select><br>
  <label><strong>Attached Bathrooms</strong></label><br/>
  <input type="radio" name="bath" value="Attached Bathroom" > yes 
  <input type="radio" name="bath" value=" " multiple> no
  <label><strong>Attached Balcony</strong></label><br/>
  <input type="radio" name="bal" value="Attached Balcony"  multiple> yes 
  <input type="radio" name="bal" value=" "> no
  <label><strong>Available From</strong></label><br/>
  <input type="radio" name="availableFrom" value="<?php $x=date("Y-m-d");?>" > Select Date
  <input type="radio" name="availableFrom" value="<?php $x=date("Y-m-d");?> "> Immediately  
  <h4>Furnishing Details</h4>
  <input type="checkbox" name="FD1[]" value="Cupboards" multiple>Cupboards 
  <input type="checkbox" name="FD1[]" value="Study Table" multiple> Study Table
  <input type="checkbox" name="FD1[]" value="AC," multiple> AC
  <input type="checkbox" name="FD1[]" value="Geyser" multiple> Geyser
  <input type="checkbox" name="FD1[]" value="Washing Machine," multiple> Washing Machine
  <input type="checkbox" name="FD1[]" value=" Wifi" multiple> Wifi
  <input type="checkbox" name="FD1[]" value="Fridge" multiple>Fridge 
  <input type="checkbox" name="FD1[]" value="Cooler" multiple> Cooler
  <input type="checkbox" name="FD1[]" value="TV" multiple>TV 
  
  <label>Total area</label>
  <input type="text" name ="sqFt" placeholder="Total area ">
 <label>rent</label> 
  <input type="text" name="budget" placeholder="enter your property address"><br/>
  <label>BHK</label> 
  <input type="text" name="bhk" placeholder="enter your property address"><br/>
  <label>Description</label> 
  <input type="text-area" name="description" placeholder="enter your property address"><br/>
  <label>Furniture</label> 
  <select name="furniture">
    <option value="Furnished">Furnished</option>
    <option value="semi-Furnished">Semi-Furnished</option>
    <option value="unFurnished">unFurnished</option>
  </select><br>
  <label>Construction_age</label> 
  <input type="text" name="constructionAge" placeholder="enter your property address"><br/>
  <label>Facing</label> 
  <select name="facing">
    <option value="east">east</option>
    <option value="west">west</option>
    <option value="north">north</option>
    <option value="south">south</option>
  </select>
  <label>Title</title>
  <input type="text" name="title" placeholder="enter your property title"><br/>
  <label>Status</label>
  <input type="text" name="status" placeholder="enter your property status"><br/>
  <label for="" class="btn purple btn-file mt-2">
                                   Browse Your Image... <input type='file' id="upload" name="image" onchange="readURL(this)" />
                                    </label>

</div>
            <input type="submit"  value="signup">
        </form>

</div>

</body>
</html>