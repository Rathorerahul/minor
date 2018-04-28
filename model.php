<?php
include 'header.php';
include 'navbar.php';

?>
   <div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">3 Bhk in sudama nagar</div>
                <div class="panel-body row">
                    <div class="col-md-3">
                        <div class="for-img">
                            <img src="images1/home.jpeg" class="img img-responsive img-thumbnail" alt="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">1</li>
                            <li class="list-group-item">2</li>
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
                        <p>Description:</p>
                    </div>
                </div>
                <div class="panel-footer ">
                 <div class="row">
                  <div class="col-md-3"> Price :₹ 4000/</div>
                    <div class="col-md-6 pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Contact</button>
                        <button class="btn btn-primary">Share Feedback</button>
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
include 'footer.php';
?>