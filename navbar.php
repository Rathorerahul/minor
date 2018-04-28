
 <nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid" style="display: flex;justify-content: center;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:orange;font-size: 20px;"><b>Rent For Sure</b></a>
    </div>
<!--
    <form action="" class="form-inline">
        <div class="input-group">
            <input type="text" class="from-control">
            <div class="input-group-append"><input type="text" class="btn btn-primary" value="Search"></div>
        </div>
    </form>
-->
   <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle ajax_link" data-toggle="dropdown" href="#services">services <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <div class="rowd">
            <div class="columnd">
          <h4>Rent</h4>
          <a href="display_PG.php">Rooms</a>
          <a href="display_flat.php">Flats</a>
          <a href="shop_display.php">Shops</a>
         
        </div>
        <div class="columnd">
          <h4>Hostel</h4>
          <a href="hostel_display.php?for=Boys">Boys</a>
          <a href="hostel_display.php?for=Girls">Girls</a>
          
        </div>
        <div class="columnd">
          <h4>PGs</h4>
          <a href="display_PG.php">Boys</a>
          <a href="display_PG.php?for=Girls">Girls</a>
        </div>
        </div>
       
        </ul>
      </li>
      <li class="aboutus "><a class="ajax_link" href="#about us">About Us</a></li>
    </ul>
    <form class="form-horizontal" role="form" method="POST" action="search.php">
   <div class="input-group adv-search" id="adv-search" >
                <input type="text" class="form-control" placeholder="Search for property by Location" style="margin-top: 8px;" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form" method="POST" action="search.php">
                                <div class="form-group">
                                    <label for="contain">Location</label>
                                    <input class="form-control" type="text" name="loc" />
                                  </div>
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control" name="ptype">
                                        <option value="flat" selected>flat</option>
                                        <option value="shop">Shop</option>
                                        <option value="PG">PG</option>
                                        <option value="hostel">Hostel</option>
                                        <option value="rent">Property For
                                       </option>
                                       <option value="shop">rent</option>
                                        <option value="flat">sale</option>
                                    </select>
                                  </div>
                                 
                                  <div class="form-group">
                                    <label for="contain">property info</label>
                                    <input class="form-control" type="text" name="search" />
                                  </div>
                                  <button type="submit" name="searching" class="btn btn-primary1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                
                            </div>
                        </div>
                        <button type="submit" name="searching" class="btn btn-primary1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
            </form>
   
      <ul id="ul2" class="nav navbar-nav navbar-right second_nav">
      
<li class="post-property"><a href="allform.php"><button class="btn btn-primary1"> Post Property</button></a></li>
      <li><a id="lgb1" href="signup.php"><button class="btn btn-primary1" ><span class="glyphicon glyphicon-user" style="color:#fff"></span>  <?php
      if(isset($_SESSION['id'])){echo "User";echo "<script>document.getElementById('lgb1').href='user_profile.php';</script>";}
      else{ echo "Sign UP"; }?></button></a></li>
      
	  <li><a id="lgb" href="login.php"><button class="btn btn-primary1" ><span class="glyphicon glyphicon-log-in" style="color:#fff"></span> <?php
      if(isset($_SESSION['id'])){echo "Logout";echo "<script>document.getElementById('lgb').href='logout.php';</script>";}
      else{ echo "login"; }?></button></a></li>
    </ul>
  </div> 
</nav>
  
 