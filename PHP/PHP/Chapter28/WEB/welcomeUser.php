<?php
require_once('lib/class_loader.php');
@session_start();

 $user = $_SESSION['admin'];
 
  if($user == null)
  {
      header("Location: login.php");
  }
 
?>
<html>
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

	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" width="240" height="56" border="0" /></a></div>
    
    <div class="head_right">
    	<div class="icon-top icon-phone">Call us directly: <span>1-800-643-4300</span></div>
        <div class="icon-top icon-map">Via Ludovisi 39,sydney, Australia <a href="location.html"><span>View on Map</span></a></div>
    </div>
</div>
</div>

<!-- topmenu -->  
<div class="menu-header">
	<div class="menu-header">
	<div class="container">
        
	        <ul class="topmenu">
		<li class="first current-menu-item"><a href="index.php">Home</a></li>
              	<li><a href="about.php">Add new category</a></li>
		<li><a href="sellbook.php">Add new book</a></li>
                <li><a href="categories.php">Category</a></li>
                <li><a href="news.php">change &amp; Password</a></li>
                
       	  </ul>
        </div>
</div>    
</div>        
<!--/ topmenu -->

<div class="header">
	<div class="container">&nbsp;</div>  
</div>
<div class="header-line"></div>

<div class="middle">
<div class="container">

	<div class="header-title-image">
    	<div class="image"><img src="images/header/header_4.jpg" width="708" height="124" alt="" /></div>
    	<h1><span>Find out more</span> Admin </h1>
    </div>
    
    
        
        
        <?php
        
         $user = $_SESSION['admin'];
        $username = $user->username;
        
        $type = ($user->admin)?"Administrator" : "Customer";
		
        echo"<h1>Welcome $type : $username</h1>";
	echo"<br><a href='logout.php'>log off</a>";
        
        
        if($user->admin)
        {
            echo "<br><a href='mailout.php'>mailout</a><br/>";
        }
        
        // put your code here
        ?>
        
    
    <ul>
        <li><a href='products.php?category=1' >go to the main site</a></li>
        <li><a href='products.php?category=2' >Add new category</a></li>
        <li><a href='products.php?category=2' >Add new book</a></li>
        <li><a href='products.php?category=2' >Add change admin password</a></li>
    </ul>
    
    
    
        
    <!--/ middle content -->
    
   
</div>
</div>
    
        <div class="footer">

	 <div class="container_24">
    
    	<div class="grid_3">
        <img src="images/logo_footer.png" width="110" height="72" alt="" />
        </div>
        
        <div class="grid_8">
        	<div class="address">
                <p>Welcome Inn Resort Ltd,<br />
                Via Ludovisi 39-45, Rome, 54267, Italy<br />
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
