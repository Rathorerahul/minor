<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>FeedBack Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="http://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,700|" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/form.css" >
        <!--script src="js/form.js"></script-->
</head>
       <body> <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form" action="post_feedBack.php">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="description" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="Name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="userId" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" value="post" >Post </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
		</body>
		</html>