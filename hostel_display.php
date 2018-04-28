<?php
//session_start();

include "connect.php";
$k = $_GET['for'];
if(!isset($_POST['searching'])){
    
    $ar  =Fetch("SELECT * FROM hostel having HostelFor='$k' OR HOstelFor='Both' order by Pid desc");
}
else
{
        $search = $_POST['loc'];
    $t = $_POST['ptype'];
    $ar  =Fetch("SELECT * FROM '$t' having Address LIKE '%$search% order by Pid desc");

echo "searching";
}
?>
         <?php
include 'header.php';
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
                <div class="panel-heading"> <?php echo $Name; ?>  in <?php echo $Address; ?></div>
                <div class="panel-body row">
                    <div class="col-md-3">
                        <div class="for-img">
                            <img src="uploads/<?php echo $Images;?>" class="img img-responsive img-thumbnail" alt="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">Hostel For: <?php echo $HostelFor; ?></li>
                            <li class="list-group-item">Availability of Rooms:<?php echo $Availability; ?></li>
                            <li class="list-group-item">Charges:<?php echo $Charges; ?></li>
                            <li class="list-group-item">Facilities Provides:<?php echo $Services; ?></li>
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
                    <div class="col-md-3">Owner:Boss</div>
                    <div class="col-md-9">
                        <p>Description:<?php echo $Description;?></p>
                    </div>
                </div>
                <div class="panel-footer ">
                 <div class="row">
                  <div class="col-md-3"> Price :₹ <?php echo $Charges;?>/</div>
                    <div class="col-md-6 pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Contact</button>
                        <a href="feedback.php" style="color:white; text-decoration:none;"><button class="btn btn-primary">Share Feedback</button></a>
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
          <p>Some text in the modal.</p>
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