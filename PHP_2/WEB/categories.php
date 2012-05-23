<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?
require_once('lib/class_loader.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News | Welcome Inn</title>
<meta name="author" content="ThemeFuse" />
<meta name="description" content="A short description of your company" />
<meta name="keywords" content="Some keywords that best describes your businee" />

<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".widget_recent_comments li:even").addClass("even");
	});
</script>
</head>

<body>
<div class="head">
<div class="container">

	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" width="240" height="56" border="0" /></a></div>
    
    <div class="head_right">
    	<div class="icon-top icon-phone">Call us directly: <span>1-800-643-4300</span></div>
        <div class="icon-top icon-map">Via Ludovisi 39, Rome, <a href="location.php"><span>View on Map</span></a></div>
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

            
               <h1> categories goes here welcome page user:</h1>
               
                <ul>
        <li><a href='products.php?category=1' >Business</a></li>
        <li><a href='products.php?category=2' >IT</a></li>
        <li><a href='products.php?category=2' >Accountant</a></li>
        <li><a href='products.php?category=2' >here is 28 page index</a></li>
    </ul>
    
            

        
        <div class="clear"></div>
	</div>
    <!--/ middle content -->
    
    <div class="newsletter_box">
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
                <p>Welcome Inn Resort Ltd,<br />
                Via Ludovisi 39-45, Rome, 54267, Italy<br />
                Phone: 1-800-245.356  / Fax: 1-800-245.357<br />
                Email: <a href="mailto:guests@welcomeinn.com">guests@welcomeinn.com</a></p>
        	</div>
        </div>
        
        <div class="grid_13">
        
div class="botmenu">
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

