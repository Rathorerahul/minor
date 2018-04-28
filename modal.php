<?php 
session_start();
include "connect.php";
$ar = Fetch("SELECT * FROM propertyinfo ");
foreach($ar as $k )
{ extract($k);
    ?>
$
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="modal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="section">
	<strong><h2>Available properties</h2></strong>
<p></p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/home.jpeg" alt="p1" style="width:100%">
      <div class="container">
        <h2><?php echo $pfor?></h2>
        <p class="title"><?php echo $ptype?></p>
		<p> For PG &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<b><span style="font-size:18px;">&#8377 5000</span></b></p>
		<p class="title"><?php echo $sqFt?></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

 <div class="column">
    <div class="card">
      <img src="images/home.jpeg" alt="p1" style="width:100%">
      <div class="container">
        <h2>Indore</h2>
        <p class="title"><?php echo $description?></p>
		<p> For PG &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<b><span style="font-size:18px;">&#8377 5000</span></b></p>
		<p class="title"><?php echo $sqFt?></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<?php }?>
  


 
  
 
  
  
  
 
  
  
  
  
  
  </div>
  </div>

</body>
</html>
