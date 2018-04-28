<?php
//session_start();
include 'header.php';
include "connect.php";
    $ar  =Fetch("SELECT * FROM propertyinfo");
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
                <div class="panel-heading"> <?php echo $bhk; ?> Bhk in <?php echo $address; ?></div>
                <div class="panel-body row">
                    <div class="col-md-3">
                        <div class="for-img">
                            <img src="uploads/<?php echo $image;?>" class="img img-responsive img-thumbnail" alt="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Posted On: <?php echo $posteddate; ?></li>
                            <li class="list-group-item"><?php echo $availableFor; ?></li>
                            <li class="list-group-item">3</li>
                            <li class="list-group-item">4</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">5</li>
                            <li class="list-group-item">6</li>
                            <li class="list-group-item">7</li>
                            <li class="list-group-item">8</li>
                        </ul>
                    </div>
                    <div class="col-md-3">Owner:Boss</div>
                    <div class="col-md-9">
                        <p>Description:<?php echo $description;?></p>
                    </div>
                </div>
                <div class="panel-footer ">
                 <div class="row">
                  <div class="col-md-3"> Price :₹ <?php echo $budget;?>/</div>
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