<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != ''){
		if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
			//submit the form
			$firstName = $_POST['firstname'];
			$secondName = $_POST['secondname'];
			$userEmail = $_POST['email'];
			$messageSubject = $_POST['subject'];
			$message = $_POST['message'];
			$to = "info@cthulhudivers.com";
			$body = "";
			$body .= "First name: ".$firstName. "\r\n";
			$body .= "Second name: ".$secondName. "\r\n";
			$body .= "Email: ".$userEmail. "\r\n";
			$body .= "Message: ".$message. "\r\n";
			$headers = "From: nicholas.hosken@cthulhudivers.com";
			$headers .= "Reply-To: $userEmail";
			mail($to,$messageSubject,$body);
			$message_sent = true;
		}
		else {
			$invalid_class_name = "form-invalid";
		}
	}
?>
<!DOCTYPE html><html lang="en-US"><!-- InstanceBegin template="/Templates/001 Them Bones.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172418347-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-172418347-2');
		</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="robots" content="INDEX,FOLLOW" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="author" content="Nicholas Hosken">
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>Contact Us | Cthulhu Divers</title>
		<!-- InstanceEndEditable -->

		<!-- InstanceBeginEditable name="head" -->
		<meta name="description" content="Find out why the best divers choose us for their Playa Mujeres dive tours. Get in touch with us today!">
		<meta name="keywords" content="scuba tours Cancun, scuba tours Playa Mujeres, things to do Cancun, things to do Playa Mujeres, padi Playa Mujeres">		
		<!-- InstanceEndEditable -->

		<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
		<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
		<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
		<!--[if (gte IE 9)|!(IE)]><html lang="en"> <!--<![endif]-->

		<!-- CSS
	  ================================================= -->
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400" rel="stylesheet" type="text/css">
		<link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,500,700" rel="stylesheet" type="text/css">
		
		<!-- Favicons
	  ================================================ -->
		<link rel="icon" type="image/png" href="img/favicon/cthulhu-divers-logo-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="img/favicon/cthulhu-divers-logo-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicon/cthulhu-divers-logo-96x96.png" sizes="96x96">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-57x57.ico" sizes="57x57">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-72x72.ico" sizes="72x72">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-76x76.ico" sizes="76x76">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-114x114.ico" sizes="114x114">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-120x120.ico" sizes="120x120">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-144x144.ico" sizes="144x144">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-152x152.ico" sizes="152x152">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-180x180.ico" sizes="180x180">
	</head> 
	<body>
		<section id="nav-overlay"></section>
		<!-- Navbar -->	
		<nav>
			<div id="nav-container">
				<a href="https://cthulhudivers.com/" id="nav-logo" title="Cthulhu Divers Home Page">
					<img src="img/cthulhu-logo-mobile.webp" alt="Cthulhu Divers Logo">
				</a>				
				<div id="nav-list">
					<a id="link-about" href="about.html" title="About Cthulhu Divers">ABOUT<div class="nav-score"></div></a>
					<a id="link-certified-divers" href="certified-scuba-diving-cancun.html" title="Cancun and Playa Mujeres Dive Sites">CERTIFIED DIVERS<div class="nav-score"></div></a>
					<a id="link-padi-courses" href="padi-diving-courses-cancun.html" title="PADI Scuba Courses">PADI COURSES<div class="nav-score"></div></a>
					<a id="link-blog" href="blog/cancun-best-dive-sites-for-beginners-and-the-refresher-course.html" title="Cthulhu Divers Blog">BLOG<div class="nav-score"></div></a>
					<a id="link-contact" href="contact.html" title="Contact Cthulhu Divers">CONTACT<div class="nav-score"></div></a>

					<div id="languages">
<!--
						<a id="chinese" class="flag" href="#">
							<img src="../img/layout/china.webp" alt="法语">
						</a>
						<a id="french" class="flag" href="#">
							<img src="../img/layout/france.webp" alt="français">
						</a>
-->						
						<a id="portuguese" class="flag" href="portugues/pagina-inicial.html">
							<img src="img/layout/brazil.webp" alt="portugues">
						</a>
<!--						
						<a id="russian" class="flag" href="#">
							<img src="../img/layout/russia.webp" alt="русский">
						</a>
-->
					</div>

				</div>				
				<div id="nav-padi"><img src="img/padi-instructors-available.webp" alt="PADI Instructors Available"></div>	
			</div>
			<div id="burger">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<a href="https://cthulhudivers.com/" title="Cthulhu Divers Home Page"><img src="img/cthulhu-logo-header-small.webp" alt="Cthulhu Divers Logo"></a>
			<div id="nav-click">

				<div id="flag-click">
<!--
					<a href="#" class="flag-burger"><img src="../img/layout/china.webp" alt="法语"></a>
					<a class="flag-burger" href="#"><img src="../img/layout/france.webp" alt="français"></a>
-->
					<a href="https://cthulhudivers.com/portugues/pagina-inicial.html" class="flag-burger"><img src="img/layout/brazil.webp" alt="portugues"></a>
<!--
					<a href="#" class="flag-burger"><img src="../img/layout/russia.webp" alt="русский"></a>
-->
				</div>

				<a class="item-burger" href="https://cthulhudivers.com/" title="Cthulhu Divers Home Page">HOME</a>
				<a class="item-burger" href="about.html" title="Cthulhu Divers About Us">ABOUT</a>
				<a class="item-burger" href="certified-scuba-diving-cancun.html" title="Cancun Dive Sites">CERTIFIED DIVERS</a>
				<a class="item-burger" href="padi-diving-courses-cancun.html" id="nav-click-courses" title="PADI Course Playa Mujeres">
					<img src="img/padi-logo-tiny.webp" id="padi-tiny" alt="PADI"> COURSES
				</a>
				<a class="item-burger" href="blog/cancun-best-dive-sites-for-beginners-and-the-refresher-course.html" title="Scuba Blog Cancun">BUBBLE BLOG</a>
				<a class="item-burger" href="sitemap.html" title="Cthulhu Divers Sitemap">SITEMAP</a>
				<a class="item-burger" href="contact.html" title="Cthulhu Divers Contact Info">CONTACT</a>
			</div>
<!--
			<div id="sardine-run">
				<br>
				<a class="banner-button" title="Sardine Run South Africa" href="../sardine-run-south-africa.html">
					<div>
						<p>Sardine Run Safari April 2022</p>
					</div>
				</a>
			</div>			
-->
			<div id="whale-shark-tour">
				<br>
				<a class="banner-button" title="Whale Shark Tour" href="cancun-whale-shark-snorkeling.html">
					<div>
						<p>Whale Shark Season 2022</p>
					</div>
				</a>
			</div>			
		</nav>

		<div id="nav-spacer"></div>		
		<!-- InstanceBeginEditable name="content" -->
		<section class="hero-image" style="background-image:url('img/contact.webp')"></section>
		<main>
			<div class="content-positioning">
				<section id="content-right">
					<div class="price-panel">
						<div class="price-panel-number">&nbsp;</div>
						<div class="price-panel-from">&nbsp;</div>
						<div class="price-panel-fee">&nbsp;</div>
					</div>
					<hr class="line-deco">
					<hr class="line-deco">
					<p class="panel-menu-header">ACTIVITIES:</p>
					<ul>
						<li><a href="certified-scuba-diving-cancun.html">CERTIFIED DIVERS</a></li>
						<li><a href="padi-diving-courses-cancun.html">DIVING COURSES</a></li>
						<li><a href="cancun-padi-scuba-diver.html">ONE DAY SCUBA COURSE</a></li>
						<li><a href="cancun-padi-discover-scuba-diving-dsd.html">ONE DAY RESORT COURSE</a></li>
						<li><a href="blog/cenote-angelita.html">DIVE CENOTES</a></li>
						<li><a href="cancun-bull-shark-diving.html">DIVE WITH BULL SHARKS</a></li>
						<li><a href="#">SNORKEL CENOTES</a></li>
						<li><a href="blog/cenote-angelita.html">SNORKELING DAY TRIPS</a></li>
						<li><a href="cancun-whale-shark-snorkeling.html">WHALE SHARK SWIM</a></li>
						<li><a href="cancun-landlubber-tours.html">LANDLUBBER TOURS</a></li>
					</ul>
					<div id="panel-img-contact" class="panel-img"></div>
				</section>			
				<div class="content-left">
					<div class="header">
						<h1>CONTACT</h1>
					</div>
					<p>Our phones seldom work underwater and never while we are giving classes so it is usually best to use the contact form below or to email us first; we can usually answer most of your questions best that way, too. If you have a lot of questions or need more clarification (or just want to hear our lovely voices) we can always set up a time to talk on the phone when it's most convenient for you.</p>
					<p><strong>EMAIL: info@cthulhudivers.com<br>TEL:&nbsp;+52 1 998 303 1727</strong></p>
					
					<div id="form-sent" style="padding-top: 20px"><h3>It has come to our attention that some or our clients are experiencing technical difficulties whilst trying to get in touch via our website contact form. In light of this, we kindly ask that you instead use the above details to contact us as we work through the issue.<br>Many thanks!<br>Cthulhu Divers staff<br>12 Jan 2021</h3></div>
					
					<?php
						if($message_sent):
					?>
						<!--<div id="form-sent"><h3>Thanks, we'll be in touch!</h3></div>-->
						
					<?php
						else:
					?>
<!--					
					<form action="contact.html" method="POST" class="form">
						<div class="form-group">
							<label for="firstname" class="form-label">First Name:</label>
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name*" tabindex="1" required>
						</div>
						<div class="form-group">
							<label for="secondname" class="form-label">Second Name:</label>
							<input type="text" class="form-control" id="secondname" name="secondname" placeholder="Second Name*" tabindex="2" required>
						</div>
						<div class="form-group">
							<label for="email" class="form-label">Your Email:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail*" tabindex="3" required>
						</div>
						<div class="form-group">
							<label for="message" class="form-label">Message:</label>
							<textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message...*" tabindex="4"></textarea>
						</div>
						<div>
							<button type="submit" class="btn">Send Message!</button>
						</div>
					</form>
-->
					<?php
						endif;
					?>
				</div>
			</div>
		</main>
		<!-- InstanceEndEditable -->
		<footer>
			<div id="footer-container">
				<div id="footer-menu">
					<ul>
						<li><h2>Info</h2></li>
						<li><a href="https://cthulhudivers.com/" title="Cthulhu Divers Home">Home</a></li>
						<li><a href="about.html" title="Cthulhu Divers Info">About</a></li>
						<li><a href="certified-scuba-diving-cancun.html" title="Playa Mujeres Dive Tours">Certified Divers</a></li>
						<li><a href="padi-diving-courses-cancun.html" title="Scuba PADI course">PADI Courses</a></li>
						<li><a href="blog/cancun-best-dive-sites-for-beginners-and-the-refresher-course.html" title="Cancun Dive Articles">Blog</a></li>
						<li><a href="sitemap.html" title="Playa Mujeres Dive Center">Sitemap</a></li>
						<li><a href="contact.html" title="Contact Cthulhu Divers">Contact</a></li>
						<li>&nbsp;</li>
					</ul>
				</div>
				<div id="map-container">
					<iframe title="Map of Cthulhu Divers Playa Mujeres" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.675989038479!2d-86.83311068506507!3d21.165288985924587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb41ab3bcc6a0732!2sCthulhu+Divers!5e0!3m2!1sen!2smx!4v1505342350790">
					</iframe>
				</div>
				<div id="footer-address">
					<ul>
						<li>Office Hours: <br class="show-920">08:00 - 19:00</li>
						<li>Punta Sam Ferry Terminal</li>
						<li>Carretera Punta Sam</li>
						<li>Cancun</li>
						<li>77500</li>
						<li>Mexico</li>
						<li>Office Tel: <br class="show-920">+52 1 998 303 1727</li>
						<li>&nbsp;</li>
					</ul>
				</div>
			</div>
			<div id="footer-address-bottom">
				<p class="footer-text">CTHULHU DIVERS</p>
				<p class="footer-text">Punta Sam Ferry Terminal, 77500</p>
				<p class="footer-text">Cancun, Quintana Roo, Mexico</p>
				<br>
				<p class="footer-text">+52 1 998 303 1727</p>
				<p class="footer-text">Office Hours: 08:00 - 19:00</p>
			</div>
		</footer>
		<script src="scripts/script.js" defer></script>
	</body>
<!-- InstanceEnd --></html>