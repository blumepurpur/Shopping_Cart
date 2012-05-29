<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index | Welcome Inn</title>
<meta name="author" content="ThemeFuse" />
<meta name="description" content="A short description of your company" />
<meta name="keywords" content="Some keywords that best describes your businee" />

<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/slides.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/slides.css" />
<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				width: 960,
				height: 379,
				preload: true,
				preloadImage: 'images/loading.gif',
				play: 5000,
				pause: 2500,
				effect: 'fade, fade',
				hoverPause: true,
				animationStart: function(){
					$('.caption').animate({
						bottom:-96
					},100);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
			
		});
</script>

</head>

<body>
<div class="head">
<div class="container">

	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" width="240" height="56" border="0" /></a></div>
    
    <div class="head_right">
    	<div class="icon-top icon-phone">Call us directly: <span>1-800-643-4300</span></div>
        <div class="icon-top icon-map">Via Ludovisi 39,sydney, Australia <a href="location.php"><span>View on Map</span></a></div>
    </div>
</div>
</div>

<!-- topmenu -->  
<div class="menu-header">
	<div class="container">
        
	        <ul class="topmenu">
				<li class="first current-menu-item"><a href="index.php">Home</a></li>
              	<li><a href="about.php">About us</a></li>
				<li><a href="sellbook.php">Sell your book</a></li>
				<li><a href="login.php">login</a></li>
                <li><a href="categories.php">Category</a></li>
                <li><a href="news.php">News &amp; Promos</a></li>
                <li class="last"><a href="contacts.php">Contact</a></li>
				<li><a href="columns.php">Help</a></li>
       	  </ul>
        </div>
</div>        
<!--/ topmenu -->

<div class="header homepage">
<!-- header slider -->
	<div class="container">
    	
        <div id="slides">
				<div class="slides_container">
					<div>
						<a href="#"><img src="images/temp_slide_1.jpg" width="960" height="379" alt="Enjoy the breath-taking views from our Hotel" /></a>
						<div class="caption"><p>Enjoy the breath-taking views from our Hotel</p></div>
					</div>
					<div>
						<img src="images/temp_slide_2.jpg" width="960" height="379" alt="Great panaromic mountain view makes the best place to admire nature." />
						<div class="caption"><p>Great panaromic mountain view makes the best place to admire nature.</p></div>
					</div>
                    <div>
						<a href="#"><img src="images/temp_slide_3.jpg" width="960" height="379" alt="Sea with a very beautiful view to the sea and Sunny Beach Resort." /></a>
						<div class="caption"><p>Sea with a very beautiful view to the sea and Sunny Beach Resort.</p></div>
					</div>
                    <div>
						<a href="#"><img src="images/temp_slide_4.jpg" width="960" height="379" alt="We offer a choice of comfortable rooms and great rates" /></a>
						<div class="caption"><p>We offer a choice of comfortable rooms and great rates</p></div>
					</div>
				</div>
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>		</div>
	</div>   
<!--/ header slider -->    
</div>
<div class="header-line"></div>

<div class="middle">
<div class="container">

	<!-- baners top -->
    <div class="baners_top">
        <div class="baner-item">
        	<div class="baner-img"><a href="sellbook.php"><img src="images/baner_top_1.jpg" alt="" width="230" height="73" border="0" /></a></div>
            <h2><span>Sell your</span>Texbook</h2>
        </div>
        
        <div class="baner-item">
        	<div class="baner-img"><a href="../register_user.php"><img src="images/baner_top_2.jpg" alt="" width="230" height="73" border="0" /></a></div>
        	<h2><span>New Customer</span>Registration</h2>
        </div>
        
        <div class="baner-item">
        	<div class="baner-img"><a href="news.php"><img src="images/baner_top_3.jpg" alt="" width="230" height="73" border="0" /></a></div>
            <h2><span>Latest</span> Promos</h2>
        </div>
    </div>    
    
	<!--/ baners top -->
    
    <!-- middle content -->
    <div class="container_24">
    
    	<div class="grid_12">
        <div class="news-item">
            	<h2><a href="about.php">Welcome to rent a texbook</a></h2>
                <div  class="news-text">
                    <img src="images/temp_img_2.jpg" width="140" height="93" alt="" class="alignleft" />
                    <p>we are a uni base organization, created to provide an alternative solution for your expensives UNI texbooks </p>
                </div>
			</div>
        </div>
        
        <div class="grid_12">
            <div class="news-item">
            	<h2><a href="about.php">Mission &amp; Vission</a></h2>
                <div  class="news-text">
                    <img src="images/temp_img_1.jpg" width="140" height="93" alt="" class="alignleft" />
                    <p>Indulge in our delicious cuisine infused with organic ingredients and prepared by expert chefs. We are providing a wide array of fine dining establishments offering stunning views from every turn in a relaxing and cosy atmosphere.</p>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>
	</div>
    <!--/ middle content -->
    
    <div class="newsletter_box newsletter_index">
        <h3>Sign up for Newsletter:</h3>
        <form action="" method="post">
        	<input type="text" value="Enter your e-mail address" onfocus="if (this.value == 'Enter your e-mail address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your e-mail address';}" name="" class="inputField" />
			<input type="submit" value="Submit" class="btn-submit" />
        </form>
        <div class="clear"></div>
    </div>
</div>
</div>

<div class="footer">

	 <div class="container_24">
    
    	<div class="grid_3">
        <img src="images/logo_footer.png" width="110" height="72" alt="" />
        </div>
        
        <div class="grid_8">
        	<div class="address">
                <p>Welcome E-book.com,<br />
                Via Ludovisi 39-45, sydney, Australia<br />
                Phone: 1-800-245.356  / Fax: 1-800-245.357<br />
                Email: <a href="mailto:guests@welcomeinn.com">guests@welcomeinn.com</a></p>
        	</div>
        </div>
        
        <div class="grid_13">
        
        	<div class="botmenu">
            	<ul>
                    <li class="first current-menu-item"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="sellbook.php">Sell your Texbook</a></li>
                    <li><a href="location.php">Location</a></li>
					<li><a href="columns.php">Help</a></li>
       	  		</ul>
            </div>
            
            <div class="fallow">
            	<span>Follow us on:</span> <a href="#" class="link_social link_fb">Facebook</a> <a href="#" class="link_social link_twitter">Twitter</a> <a href="#" class="link_social link_rss">RSS</a>
            </div>
            
            <div class="copyright">
			1
            <p>Admin; 2011 - 2012 E-book</p>
            </div>
            
        </div>
        
        <div class="clear"></div>

	</div>
    
</div>

</body>
</html>
