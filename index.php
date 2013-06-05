<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ltie7 ltie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ltie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ltie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class=""> <!--<![endif]-->
 <?php

 $isemail = false;

if(isset($_POST['email'])) {

    $isemail = true;
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hello@psd2rwd.com, cleverbaker@gmail.com, alykasa@gmail.com, steven@hazeltree.org, alexandru_stoicescu2005@yahoo.com";
    $email_subject = "PSD2RWD site lead";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone'])) {
        died('Ooh, we want your name, company, and contact info.');      
    }
     
    $name = $_POST['name']; // required
    $company = $_POST['company']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $schedule = $_POST['schedule']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }/*
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }*/
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Name: ".clean_string($company)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Schedule: ".clean_string($schedule)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
}
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="author" content="Rcode Team"/>
<meta content="True" name="HandheldFriendly">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="viewport" content="width=device-width">

<title>PSD to RWD! JavaScript, CSS, HTML5 Front-End Code Conversions From Your PSD</title>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<script src="js/modernizr.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="home">

    <header id="header" class="sticky">
    
    	<div class="wrap clearfix">
        
        	<a id="logo"><img src="images/owl-logo.png" width="104" height="76"></a>
            
             <nav id="nav">
                <ul>
                    <li class="current"><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

        </div>
    
    </header>

    <section class="new">
    
    	<div class="wrap">
        		
		  	<h1 class="red">Convert <span class="psd">Ps</span> &rarr; <span class="rwd"><img src="responsive.png"></span>Responsive Web <!--sites using JS, CSS & HTML5--></h1>
			<span class="tag">We'll take your <b>Photoshop file</b>, code it into a <b>responsive website</b> (with mobile and desktop versions)<br>using the latest <b>JavaScript, CSS, and HTML5</b>, and send you the files. <b>Delivered in less than 5 days</b>. </span>

			<div class="panel large-7 columns">
				<img class="owl" src="/zurb/images/owl_illustration.png">
				<h2>Special promotional offer!</h2>
				<p class="callout">To celebrate the launch of our new site. Between now and June 7th, buy any PSD to RWD conversion for only <del>$495</del> <span class="teal">$167</span>.</p>
				
				<a class="button medium" href="#" data-reveal-id="buy-now">Order Now </a>
				
			</div>
		
            <div class="grid clearfix">
            
                <div class="grid-2-3 first">
                
                </div>
                
                <div class="grid-1-3 align_center">
                
                </div>
            
            </div>
            
        </div>
    
    </section>	
    
    <section class="showcase">
    	
        <div class="wrap">

            <div class="grid clearfix">
            <div class="grid-1-2">
                
                    <h1 style="color: #ff9933; text-align: left; text-shadow:none; ">RWD, please!</h1>
                    
                    <p>Everyone wants responsive websites --that’s a trend that’s here to stay. Today it’s expected that a website will adapt to any mobile device.
</p>
                    
                </div>
                <div class="grid-1-2">   

                    <img src="images/showcase.png">                       
                    
                    
                
                </div>
                
                
            
            </div>
            
            
            
        </div>
        
    </section>
    
<section id="services" class="responsive grey_bg">
	
	<div id="main_content">

    <section class="browsers">
    	
        <div class="wrap">
        	
       		<h2>Browsers Galore</h2> 
            
            <div class="grid clearfix">
            
                <div class="grid-1-2">
                
                	<img src="images/browsers.png" width="442" height="64">
                                                                
                </div>
                
                <div class="grid-1-2">
                
                     <h3>Chrome, Firefox, Safari, IE, Opera, Mac, PC, iOS, Android, Blackberry</h3>                   
                    
                </div>
            
            </div>
            
        </div>
        
    </section>
    
    <section class="assurance grey_bg">
    	
        <div class="wrap">
        	
       		<h2>Assurance</h2>
            
            <div class="grid clearfix">
            
                <div class="grid-1-2">
                                
                    <h3>Our protocols are secure</h3>
                    
                    <ul class="bullets">
                        <li>NDA</li>
                        <li>SFTP transfers</li>
                        <li>Password protected computers</li>
                        <li>Peer reviewed code</li>
                        <li>We keep client work a secret</li>
                    </ul>
                                
                </div>
                
                <div class="grid-1-2">
                
                    <img src="images/assurance.png" width="395" height="260">
                    
                </div>
            
            </div>
            
        </div>
        
    </section>
    
    <section id="about" class="team profiles">
    	
        <div class="wrap">
        	
       		<h2>Our Team</h2>
            
            <div class="grid clearfix">
            
                <div class="grid-1-4">
                	
                    <img src="images/alyson.jpg" width="184" height="184">
                                
                    <h3 class="name">Alyson Asami</h3>
                    
                    <h5>Lead Designer</h5>
                    
                    <p class="member_info">Alyson mastered front-end code from a designer's perspective. She ensures that the final product is pixel perfect in every use case.</p>
                                
                </div>
                
                <div class="grid-1-4">
                
                	<img src="images/andru.jpg" width="184" height="184">
                                
                    <h3 class="name">Andru Stoicescu</h3>
                    
                    <h5>QA Lead</h5>
                    
                    <p class="member_info">Andru’s code is the most elegant front-end code we have ever seen -- so we decided to put him in charge of Quality Assurance so that all outgoing code meets his standards.</p>
                                
                </div>
    
                <div class="grid-1-4">
                
                	<img src="images/steven.jpg" width="184" height="184">
                                
                    <h3 class="name">Steven Valladolid</h3>
                    
                    <h5>Compatability Lead</h5>
                    
                    <p class="member_info">An early riser and early adopter; Steven set's the pace for keeping up with the latest framework. He also has a talent for creating media queries for the viewing pleasure of mobile web users.</p>
                                
                </div>
    
                <div class="grid-1-4">
                
                	<img src="images/michael.jpg" width="184" height="184">
                                
                    <h3 class="name">Michael Baker</h3>
                    
                    <h5>Lead Developer</h5>
                    
                    <p class="member_info">As a former star in-house developer at a few prestigious marketing agencies in Orange County, Michael focuses on helping marketing agencies scale projects with freelancers.</p>
                                
                </div>
            
            </div>
            
            
            <a id="join" class="button blue join" href="join.html" data-reveal-id="join-team">Want to join the team?</a>
            
        </div>
        
    </section>
    
    
    <section class="reviewers grey_bg profiles">
    	
        <div class="wrap">
        	
       		<h2>Code Reviewers and Technical Advisors</h2>
            
            <div class="grid clearfix">
            
                <a href="http://github.com/deanmao" class="grid-1-4">
                
                	<img src="images/dean.jpg" width="184" height="184">
                                
                    <h3 class="name">Dean Mao</h3>
                    
                </a>
                
                <a href="http://github.com/elbii" class="grid-1-4">
                
                	<img src="images/jamil.jpg" width="184" height="184">
                                
                    <h3 class="name">Jamil Bou Kheir</h3>
                    
                </a>
    
                <a href="http://github.com/linrock" class="grid-1-4">
                
                	<img src="images/lin.jpg" width="184" height="184">
                                
                    <h3 class="name">Linmiao Xu</h3>
                                
                </a>
    
                <a href="http://github.com/lincolnn" class="grid-1-4">
                
                	<img src="images/lincoln.jpg" width="184" height="184">
                                
                    <h3 class="name">Lincoln Nguyen</h3>
                                
                </a>
            
            </div>
            
        </div>
        
    </section>
    
    <section id="how-it-works" class="how">
    	
        <div class="wrap">
        	
       		<h2>How It Works</h2>            
            
			<ul class="ordered_list">
            	<li><span class="number">1</span>Initial talk</li>
                <li><span class="number">2</span>Review PSD together</li>
                <li><span class="number">3</span>NDA and contractor agreement signed</li>
                <li><span class="number">4</span>50% upfront payment made</li>
                <li><span class="number">5</span>Development begins, secure dev link shared with updates</li>
                <li><span class="number">6</span>QA review together</li>
                <li><span class="number">7</span>Final payment made</li>
                <li><span class="number">8</span>How’d we do?</li>
            </ul>
                        
        </div>
        
    </section>
   
   



    <section id="pricing">
        <div class="wrap">
        
        	<h2>Pricing</h2> 
        
            <div class="large-4 columns">
                    <ul class="pricing-table">
                      <li class="title">Hot</li>
                      <li class="price">$695</li>
                      <li class="description">Final code sent on <?php echo date('l', strtotime('+36 hours')); ?> morning, <?php echo date('F jS', strtotime('+36 hours')); ?>.</li>
                      <li class="bullet-item">36 hour turnaround</li>
                      <li class="bullet-item">20 minute kickoff call</li>
                      <li class="cta-button"><a class="button" href="#" data-reveal-id="buy-now">Buy Now</a></li>
                    </ul>
            </div>
            <div class="large-4 columns">
                    <ul class="pricing-table">
                      <li class="title">Rush</li>
                      <li class="price">$595</li>
                      <li class="description">Final code sent on <?php echo date('l', strtotime('+3 weekdays')); ?> morning, <?php echo date('F jS', strtotime('+3 weekdays')); ?>.</li>
                      <li class="bullet-item">3-business day turnaround</li>
                      <li class="bullet-item">20 minute kickoff call</li>
                      <li class="cta-button"><a class="button" href="#" data-reveal-id="buy-now">Buy Now</a></li>
                    </ul>
            </div>
            <div class="large-4 columns">
                    <ul class="pricing-table">
                      <li class="title">Standard</li>
                      <li class="price"><del>$495</del> <span class="teal">$167*</span></li>
                      <li class="description">Final code sent on <?php echo date('l', strtotime('+5 weekdays')); ?> morning, <?php echo date('F jS', strtotime('+5 weekdays')); ?>.</li>
                      <li class="bullet-item">5-business day turnaround</li>
                      <li class="bullet-item">20 minute kickoff call</li>
                      <li class="cta-button"><a class="button" href="#" data-reveal-id="buy-now">Buy Now</a></li>
                    </ul>
                    <p><span class="teal" style="font-weight:normal">*Limited promotional offer ends in 
                    <?
                    $end = strtotime('7 June 2013');
					$now = time();
					$timeleft = $end-$now;
					$daysleft = ceil((($timeleft/24)/60)/60);
					echo $daysleft;
					?>
                    days on June 7th.</span></p>
            </div>
        </div>
    </section>
   
   
   </div><!--end main_content-->

</section>   
        
    <section id="contact" class="contact">
    	
        <div class="wrap">
        	
       		<h2>Contact Us</h2>        
            
            <h3 class="white">We're located in the San Francisco Bay Area, San Diego, Orange County, and Los Angeles. We are advocates for meeting onsite and coworking in person. Give us a call or send a message to set something up.</h3>    
            
			<div class="grid clearfix">             

            	<div class="grid-2-3">
                
                	<div id="errorContainer">
				    	<ul />
					</div>
                
                	<form id="contact_form" method="post" action="" class="clearfix">
                    	<div class="grid-1-2">
                            <input type="text" placeholder="Name*" name="name">
                            <input type="text" placeholder="Company" name="company">
                            <input type="text" placeholder="Email address*" name="email">
                            <input type="text" placeholder="Phone number or Skype ID*" name="phone">
                            <input type="text" placeholder="Schedule a call*" name="call">
                        </div>
                        <div class="grid-1-2">
                        	<textarea placeholder="Message*" name="message"></textarea>
                        </div>
                        <div class="clear"></div>
                        
                        <input type="submit" value="Submit" class="button large">
                    </form>
                	
                </div>

            	<div class="grid-1-3 say_hi">
                
                	
                
                	<h3 class="blue">PSD2RWD.com<br> by Rcode Team</h3>
                    
                    <ul class="contact_list">
                    	<li><span class="icon phone"></span>(650) 336-5421</li>
                        <li><span class="icon mail"></span>hello@psd2rwd.com</li>
                        <li><span class="icon skype"></span>psd2rwd</li>
                    </ul>
                </div>
            
            </div>
			                        
        </div>
        
    </section>
    
    
    
    
    
    <footer id="footer">
    	<div class="wrap">
        	<p class="copy">Copyright &copy; 2013 <img src="images/owl-logo.png" width="74" height="34"> All Rights Reserved</p>
        </div>
    </footer>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.min.js"><\/script>')</script>
<script src="js/jquery.validate.js"></script>
<script src="js/main.js"></script>

<div id="join-team" class="reveal-modal large">
  <h2>Join our team!</h2>
  <h3>We're looking for developers to partner with.</h3><br>
  <p><span class="teal">Full Time:</span><br>
    Front-End Web Developers<br>
    Visual Designer<br>
</p>
<hr>
  <p><br><span class="teal">Part Time:</span><br>
    iOS developer<br>
    Ruby on Rails or Node.js developer<br>
</p>
<p><br>If you're interested in teamming up, contact jobs@psd2rwd.com.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="message-sent" class="reveal-modal medium">
  <h2>Your message was sent!</h2>
  <h3>Give us a call: <span class="teal">(650) 336-5421</span></h3><br>
  <h3>E-mail us: <span class="teal">hello@psd2rwd.com</span></h3><br>
  <h3>Follow us on twitter: <a href="http://twitter.com/psd2rwd"><span class="teal">@psd2rwd</span></a></h3><br>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="buy-now" class="reveal-modal large">
    <h2 style="margin-bottom:5px; text-align: left;">To begin, let's schedule a call</h2>
    <p style="margin-bottom:14px;">During the call we will discuss the PSD, any special JavaScript functionalities, and our delivery agreement.</p>
    <form id="contact_form" method="post" action="" class="clearfix">
        <div class="grid-1-2">
            <input type="text" placeholder="Name*" name="name">
            <input type="text" placeholder="Company" name="company">
            <input type="text" placeholder="Email address*" name="email">
            <input type="text" placeholder="Phone number or Skype ID*" name="phone">
            <input type="text" placeholder="Schedule a call*" name="call">
        </div>
        <div class="grid-1-2">
            <textarea placeholder="Message*" name="message"></textarea>
        </div>
        <div class="clear"></div>
        
        <input type="submit" value="Submit" class="button large">
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  
  <script>
    $(document).foundation();
<?php 
if ($isemail == 1)
    {
        echo "$('#message-sent').foundation('reveal', 'open');";
    }; ?>

  </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41392954-1', 'psd2rwd.com');
  ga('send', 'pageview');

</script>
<script>

    function animateOwl() {
    $('.owl')
    .animate({ top: '+=12' }, { duration: 200, easing: "linear"})
    .animate({ top: '-=40' }, { duration: 400, easing: "linear" });
    } 


</script>

</body>
</html>
