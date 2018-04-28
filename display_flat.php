<?php
//session_start();
include 'header.php';
include "connect.php";
if(!isset($_POST['searching'])){
    
    $ar  =Fetch("SELECT * FROM flat order by Pid desc");
}
else
{
        $search = $_POST['loc'];
    $t = $_POST['ptype'];
    $ar  =Fetch("SELECT * FROM '$t' having Address LIKE '%$search% order by Pid desc");

    /*$ar = Fetch("SELECT * FROM '$t' WHERE Address LIKE '%$search%'");*/
echo "searching";
}
?>
         <?php

include 'navbar.php';

?>
<?php foreach ( $ar as $k)
{
  extract($k);
?>
 
   <div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary ">
                <div class="panel-heading"> <?php echo $BHK; ?> BHK in <?php echo $Name; ?></div>
                <div class="panel-body row">
                    <div class="col-md-3">
                        <div class="for-img">
                            <img src="uploads/<?php echo $Images;?>" class="img img-responsive img-thumbnail" alt="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Available For: <?php echo $AFor; ?></li>
                            <li class="list-group-item">Tenants prefered<?php echo $Tenants; ?></li>
                            <li class="list-group-item">Available From:<?php echo $AFrom; ?></li>
                            <li class="list-group-item">Address:<?php echo $Address; ?></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">No of Bathrooms: <?php echo $Bathrooms; ?></li>
                            <li class="list-group-item">No of Bedrooms: <?php echo $BHK; ?></li>
                            <li class="list-group-item">NO of Balcony: <?php echo $Balcony; ?></li>
                            <li class="list-group-item">8</li>
                        </ul>
                    </div>
                    <div class="col-md-3">Owner:Boss</div>
                    <div class="col-md-9">
                        <p>Description:<?php echo $Description;?></p>
                    </div>
                </div>
                <div class="panel-footer ">
                 <div class="row">
                  <div class="col-md-3"> Price :₹ <?php echo $Rent;?>/</div>
                    <div class="col-md-6 pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Contact</button>
                        <button class="btn btn-primary"><a href="feedback.php" style="color:white; text-decoration:none;">Share Feedback</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <h3>
                 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <?php
}
?>
<?php
include "footer.php";
?>