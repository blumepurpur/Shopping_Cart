<?php
 require_once('../book_sc_fns.php');
?>

<html>
<head>
        <<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacts | Welcome Inn</title>
<meta name="author" content="ThemeFuse" />
<meta name="description" content="A short description of your company" />
<meta name="keywords" content="Some keywords that best describes your businee" />

<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".widget_recent_entries li:even").addClass("even");
	});
</script>

<link rel="stylesheet" type="text/css" href="css/wi-theme/jquery-ui-1.8.9.custom.css" />
<link rel="stylesheet" type="text/css" href="css/ui.selectmenu.css" />
<script type="text/javascript" language="javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="js/ui.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="js/styled.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>   
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

<div class="header">
	<div class="container">&nbsp;</div>  
</div>
<div class="header-line"></div>

<div class="middle">
<div class="container">

	<div class="header-title-image">
    	<div class="image"><img src="images/header/header_5.jpg" width="708" height="124" alt="" /></div>
    	<h1><span>Please</span> Register </h1>
    </div>
    
    <!-- middle content -->
    <div class="container_24">
    	
        <!-- content -->
    	<div class="grid_17 suffix_1">
        
                      
            
             <div class="contact-form">
				<h2>Please Fill in the form below</h2>
                                   </div>
        <?php

			 display_login_form();
 
		?>    
               
           </div>
        <!--/ content -->
         
             <!-- sidebar -->
        <div class="grid_6">
            
			<div class="box box_black">
            	<div class="inner">
            		<h3 class="bordered"><span>Easily </span> FIND US ON:</h3>
                		<div class="social-box">
							<div class="row social-mail"><a href="#">hello@envision.com</a></div>
							<div class="row social-twitter"><a href="#">twitter.com/envision</a></div>
							<div class="row social-skype"><a href="#">Skype ID:  envisionary</a></div>
							<div class="row social-facebook"><a href="#">facebook.com/envision</a></div>
                        </div>
				</div>                        
			</div>
            
			<div class="box box_gray">
				<h3><span>Contact us</span> DIRECTLY:</h3>
                
					<div class="contact-address">
						<div class="address">Via Liudovisi, no.39, 06400  <br />Rome, Italy</div>
						<div class="phone">Phone: +33 (0) 9399 7987</div>
						<div class="fax">Fax:     +33 (0) 5499 7987</div>
					</div>
                    
                    <div class="contact-maillist">
                        <div class="contact-mail"><a href="mailto:sales@welcomeinn.com">sales@welcomeinn.com</a></div>
                        <div class="contact-mail"><a href="mailto:affiliates@welcomeinn.com">affiliates@welcomeinn.com</a></div>
                        <div class="contact-mail"><a href="mailto:support@welcomeinn.com">support@welcomeinn.com</a></div>
					</div>
			</div>
        </div>
        <!--/ sidebar -->
        
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