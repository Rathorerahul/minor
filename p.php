<?php
  include "connect.php";
  session_start();
?>
<!doctype <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post property</title>
</head>
<body>
    <div>
    <form action="post_property.php" method="POST"  enctype="multipart/form-data">
            <label><strong> Property Info</strong></label><br/><hr>
            <label><strong> property type</strong></label><br/>
            <select name="ptype">
    <option value="Hostel">Hostel</option>
    <option value="PG">PG</option>
    <option value="residentail house">Residential House</option>
    <option value="flat">Flat</option>
    <option value="room">Rooms</option>
    <option value="shop">Shop</option>
  </select>
            <br/><br/>
                <label><strong> Address</strong></label><br/>
            <input type="text" name="address" placeholder="enter your property address"><br/><br/>
           <hr>
           <hr>
           <label><strong> Property Featue</strong></label><br/>
           <hr>
           <label><strong> Floor No</strong></label><br/>
           <select name="floor">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="more">more</option>
  </select><br>
  <label><strong> Total Floors</strong></label><br/>
           <select name="totalFloor">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="more">more</option>
  </select><br>
  <label><strong> Available For</strong></label><br/>
           <select name="availableFor">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Both">Both</option>
  </select><br>
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
                                   Browse Your Image... <input type='file' id="upload" name="image" onchange="readURL(this)"  />
                                    </label>


            <input type="submit"  value="signup">
        </form>
</div>

</body>
</html>