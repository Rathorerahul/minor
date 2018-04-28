<?
session_start();
?>
<!-- footer started -->
<div class ="section5" >
<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Contact</h3>
								<strong style="color: white;">Rent For Sure</strong>
								<address style="color: white;">325 Avenue Street, New York</address>
								<a href="tel:450325763542">(450) 325 763 542</a> <br>
								<a href="mailto:office@companyname.com">office@companyname.com</a>
							</div> <!-- .widget-title -->
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<div class="social-links">
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
								</div>
							</div> <!-- .widget-title -->
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Join our newsletter</h3>
								<form action="#" class="subscribe">
									<input type="email" placeholder="Enter your email...">
									<a href="feedback.php"><input type="submit" class="btn btn-primary btn-md" value="sign up" ></a>
									<div style="width:150px; height:30px;font-size:20px;">
									<h5><a href="feedback.php"style="color:#669999;text-align:centre;font-size:17px"><strong>Give FeedBack</strong></a></h5>
									</div>
								</form>
							</div> <!-- .widget-title -->
						</div>
					</div> <!-- .row -->
					<div class="copy">
						<p> Rent For Sure, Designed by Rajeev. All rights reserved</p>
						
					</div>
				</div> <!-- .container -->
			</footer> <!-- .site-fo -->




</div>
<script>
$(document).ready(function(){
    
    switch (window.location.pathname) {
        case '/minorproject/index.php':
            
            $('#adv-search').addClass('boss');
            $('#ul2').addClass('boss2');
            
});
</script>
<script>
$(document).ready(function(){
    function route(a)
    {
        var url = 'index.php' + a;
        window.location.href = url;
    }
    switch (window.location.pathname) {
        /*case 'profile.php':
           // $('#header').addClass('nav');
            $('.ajax_link').click(function () {
                var a = $().attr('href');
                route(a);
             }); braek;
        case 'profile_login.php':
            $('.ajax_link').click(function () {
                var a = $(this).attr('href');
                route(a);
            }); break;
        case 'search.php':
            $('.ajax_link').click(function () {
                var a = $(this).attr('href');
                route(a);
			});break;*/
		default:
		$('.ajax_link').click(function () {
                var a = $(this).attr('href');
                route(a);
			});
        break;
    }
});
</script>
<script>
$(document).ready(function(){
 $('#no').click(function(e){
	 e.preventDefault();
 });
</script>
<!-- end of footer -->
</body>
</html>
