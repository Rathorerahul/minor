<?php
include 'header.php';
include 'navbar.php';
include "connect.php";
?>
<?php
$i=$_SESSION['id'];
 $ar = Fetch("SELECT * FROM userinfo where id ='$i' "); 
 $ar1 = Fetch("SELECT * FROM userinfo where id ='$i' ");
foreach ( $ar as $k)
{
  extract($k);
?>
 
   <div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary ">
                <div class="panel-heading"><h4><bold>User Information</bold></h4></div>
                <div class="panel-body row">
                    <div class="col-md-3">
                        <div class="for-img">
                            <img src="uploads/avatar.jpeg" class="img img-circle" style="border:2px solid #777;" alt="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">Name: <?php echo $name; ?></li>
                            <li class="list-group-item">Email: <?php echo $email; ?></li>
                            <li class="list-group-item">Mobile No: <?php echo $mobile; ?></li>
                            <li class="list-group-item">customer Type: <?php echo $customertype; ?></li>
                        </ul>
                    </div>
                    <!--div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">5</li>
                            <li class="list-group-item">6</li>
                            <li class="list-group-item">7</li>
                            <li class="list-group-item">8</li>
                        </ul>
                    </div-->
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <p style="display:none;">Description:<?php echo $Description;?></p>
                    </div>
                </div>
                <div class="panel-footer ">
                 <div class="row">
                  <div class="col-md-3" style="display:none;"> Price :₹ <?php echo $Charges;?>/</div>
                    <div class="col-md-6 pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
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
        <div class="modal-body" style="display:inline-block;text-align:center;">
        <h3>Are you sure??</h3>
        <a href="feedback.php" style="color:white; text-decoration:none;"><button class="btn btn-primary" style="width:100px;height:50px;">Yes</button></a>
        <a href="#" id="no"  data-dismiss="modal" style=";color:white; text-decoration:none;"><button class="btn btn-primary" style="width:100px;height:50px;">NO</button></a>
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