<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $phone = $_POST['phone'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Biz Booster Contact Form';
		$to = 'kevin@cyborg.ai';
		$subject = 'New Message from Contact Form';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

    //Check if phone has been entered
		if (!$_POST['phone']) {
			$errPhone = 'Please enter your phone number';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>The Biz Booster</title>
		<!-- Bootstrap Core CSS -->
		<link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!-- Retina.js - Load first for faster HQ mobile images. -->
		<script src="assets/js/plugins/retina/retina.min.js"></script>
		<!-- Font Awesome -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Default Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
		<!-- Modern Style Fonts (Include these is you are using body.modern!) -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
		<!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
		<link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
		<!-- Plugin CSS -->
		<link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugins/background.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugins/animate.css" rel="stylesheet" type="text/css">
		<!-- Vitality Theme CSS -->
		<!-- Uncomment the color scheme you want to use. -->
		<link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css">
		<!-- IE8 support for HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
    <!-- Custom CSS -->
		<link href="assets/css/custom/custom.css" rel="stylesheet" type="text/css">
	</head>
	<!-- Alternate Body Classes: .modern and .vintage -->
	<body id="page-top">
		<!-- Navigation -->
		<!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">
					<img src="assets/img/biz-booster-logo.png" class="img-responsive" alt="Biz Booster">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a class="page-scroll" href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="#process">Process</a>
						</li>
						<li>
							<a class="page-scroll" href="#pricing">Pricing</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contact</a>
						</li>
            <li>
							<a href="http://client.bizboostercalltracking.com/login.php">Login</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<header style="background-image: url('assets/img/bg-header.jpg');">
			<div class="intro-content">
				<!--<img src="assets/img/profile.png" class="img-responsive img-centered" alt="">-->
				<div class="brand-name">Biz Booster</div>
				<div class="brand-name-subtext">Boosting Business in Your Community</div>
				<hr class="colored">
				<div class="row social">
					<div class="col-lg-12">
						<ul class="list-inline">
              <li>
                <a href="https://www.facebook.com/TheBizBooster" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
							</li>
							<li>
                <a href="https://twitter.com/TheBizBooster" target="_blank"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
							</li>
              <li>
                <a href="https://instagram.com/bizboostermonthly/" target="_blank"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="scroll-down">
				<a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
			</div>
		</header>
		<section id="about">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-lg-12 wow fadeIn">
						<h1>Monthly Advertising That Works</h1>
						<p>New Braunfels • Seguin • Luling • Gonzales • Nixon • Stockdale • La Vernia • Floresville • Lockhart</p>
						<hr class="colored">
					</div>
				</div>
				<div class="row text-center content-row">
					<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
						<div class="about-content">
							<i class="fa fa-eye fa-4x"></i>
							<h3>Attract</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
						<div class="about-content">
							<i class="fa fa-tablet fa-4x"></i>
							<h3>Engage</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
						<div class="about-content">
							<i class="fa fa-heart fa-4x"></i>
							<h3>Boost</h3>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
						<div class="about-content">
							<i class="fa fa-edit fa-4x"></i>
							<h3>Repeat</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-gray">
			<div class="container text-center wow fadeIn">
				<div class="row">
					<div class="col-lg-12">
						<h2>Our Latest Issue</h2>
						<p>We Feel That Exposure Is EVERYTHING, and we are ALWAYS trying to BOOST BUSINESS in your community!</p>
						<hr class="colored">
					</div>
				</div>
				<div class="row content-row">
					<div class="col-lg-12">
						<div class="about-carousel">
							<div class="item">
								<img src="assets/img/people/placeholder.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>June Issue</h3>
									<hr class="colored">
									<p>2016</p>
								</div>
							</div>
							<div class="item">
								<img src="assets/img/people/placeholder.jpg" class="img-responsive" alt="">
                <div class="caption">
									<h3>May Issue</h3>
									<hr class="colored">
									<p>2016</p>
								</div>
							</div>
							<div class="item">
								<img src="assets/img/people/placeholder.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>April Issue</h3>
									<hr class="colored">
									<p>2016</p>
								</div>
							</div>
							<div class="item">
								<img src="assets/img/people/placeholder.jpg" class="img-responsive" alt="">
                <div class="caption">
									<h3>March Issue</h3>
									<hr class="colored">
									<p>2016</p>
								</div>
							</div>
							<div class="item">
								<img src="assets/img/people/placeholder.jpg" class="img-responsive" alt="">
                <div class="caption">
									<h3>February Issue</h3>
									<hr class="colored">
									<p>2016</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<aside class="cta-quote" style="background-image: url('assets/img/bg-aside.jpg');">
			<div class="container wow fadeIn">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<span class="quote">Good <span class="text-primary"><strong>advertising</strong></span> is the<br/> best way to <span class="text-primary"><strong>boost</strong></span> your business.</span>
						<hr class=" colored">
						<a class="btn btn-outline-light page-scroll" href="#contact">Let's Do It</a>
					</div>
				</div>
			</div>
		</aside>
		<section id="process" class="services">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 wow fadeIn">
						<h2>Our Process</h2>
						<hr class="colored">
						<p>Here is an overview of how we approach each new project.</p>
					</div>
				</div>
				<div class="row content-row">
					<div class="col-md-4 wow fadeIn" data-wow-delay=".2s">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-clipboard"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Plan</h3>
								<ul>
									<li>Client interview</li>
									<li>Gather consumer data</li>
									<li>Create content strategy</li>
									<li>Analyze research</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay=".4s">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Create</h3>
								<ul>
									<li>Choose your placement</li>
									<li>Gather client feedback</li>
									<li>Advertisement placement</li>
									<li>Marketing review</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay=".6s">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-rocket"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Launch</h3>
								<ul>
									<li>Deploy advertisement</li>
									<li>Client check-ins</li>
									<li>Collect consumer feedback</li>
									<li>Quarterly reviews</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="testimonials bg-gray">
			<div class="container wow fadeIn">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="testimonials-carousel">
							<div class="item">
								<div class="row">
									<div class="col-lg-12">
										<p class="lead">"Most effective advertising publication in town... Period! Would recommend their services to any business owner out there wanting to get their business known."</p>
										<hr class="colored">
										<div class="testimonial-info">
											<div class="testimonial-img">
												<img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
											</div>
											<div class="testimonial-author">
												<span class="name">Brenda</span>
												<p class="small">Joe Cools A/C & Heating</p>
												<div class="stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-12">
										<p class="lead">"The Biz Booster is very informative and professional looking!"</p>
										<hr class="colored">
										<div class="testimonial-info">
											<div class="testimonial-img">
												<img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
											</div>
											<div class="testimonial-author">
												<span class="name">Letty</span>
												<p class="small">Customer</p>
												<div class="stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pricing" class="pricing" style="background-image: url('assets/img/bg-pricing.jpg')">
			<div class="container wow fadeIn">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2>Pricing</h2>
						<hr class="colored">
            <p>View our additional plans <a href="#">here</a>. Have additional needs? <a class="page-scroll" href="#contact">Contact us</a> and we will work something out.</p>
					</div>
				</div>
				<div class="row content-row">
					<div class="col-md-4">
						<div class="pricing-item featured-first">
							<h3>3 Month<br/><span class="small">Agreement</span></h3>
							<hr class="colored">
							<div class="price">from <span class="number"> <sup>$</sup>150</span> / month</div>
							<ul class="list-group">
								<li class="list-group-item">1/8 Page - <strong>$150</strong>/mo</li>
								<li class="list-group-item">1/4 Page - <strong>$200</strong>/mo</li>
								<li class="list-group-item">1/2 Page - <strong>$350</strong>/mo</li>
								<li class="list-group-item">Full Page - <strong>$600</strong>/mo</li>
							</ul>
							<a href="#" class="btn btn-outline-dark">Sign Up</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-item featured">
							<h3>6 Month<br/><span class="small">Agreement</span></h3>
							<hr class="colored">
							<div class="price">from <span class="number"><sup>$</sup>135</span> / month</div>
							<ul class="list-group">
                <li class="list-group-item">1/8 Page - <strong>$135</strong>/mo</li>
								<li class="list-group-item">1/4 Page - <strong>$180</strong>/mo</li>
								<li class="list-group-item">1/2 Page - <strong>$315</strong>/mo</li>
								<li class="list-group-item">Full Page - <strong>$540</strong>/mo</li>
							</ul>
							<a href="#" class="btn btn-outline-dark">Sign Up</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-item featured-last">
							<h3>12 Month<br/><span class="small">Agreement</span></h3>
							<hr class="colored">
							<div class="price">from <span class="number"><sup>$</sup>120</span> / month</div>
							<ul class="list-group">
                <li class="list-group-item">1/8 Page - <strong>$120</strong>/mo</li>
								<li class="list-group-item">1/4 Page - <strong>$160</strong>/mo</li>
								<li class="list-group-item">1/2 Page - <strong>$280</strong>/mo</li>
								<li class="list-group-item">Full Page - <strong>$480</strong>/mo</li>
							</ul>
							<a href="#" class="btn btn-outline-dark">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cta-form bg-dark">
			<div class="container text-center">
				<h3>Subscribe to our newsletter!</h3>
				<hr class="colored">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<!-- MailChimp Signup Form -->
						<div id="mc_embed_signup">
							<!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
							<form role="form" action="//startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
								<div class="input-group input-group-lg">
									<input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
									<span class="input-group-btn">
									<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe!</button>
									</span>
								</div>
								<div id="mce-responses">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
							</form>
						</div>
						<!-- End MailChimp Signup Form -->
					</div>
				</div>
			</div>
		</section>
		<section id="contact">
		  <div class="container wow fadeIn">
		    <div class="row">
		      <div class="col-lg-12 text-center">
		        <h2>Contact Us</h2>
		        <hr class="colored">
		        <p>Please tell us about your business needs and we will let you know what we can do to help you.</p>
		      </div>
		    </div>
		    <div class="row content-row">
		      <div class="col-lg-8 col-lg-offset-2">
		        <form name="sentMessage" id="contactForm" role="form" novalidate>
		          <div class="row control-group">
		            <div class="form-group col-xs-12 floating-label-form-group controls">
		              <label>Name</label>
		              <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
		              <p class="help-block text-danger"></p>
		            </div>
		          </div>
		          <div class="row control-group">
		            <div class="form-group col-xs-12 floating-label-form-group controls">
		              <label>Email Address</label>
		              <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
		              <p class="help-block text-danger"></p>
		            </div>
		          </div>
		          <div class="row control-group">
		            <div class="form-group col-xs-12 floating-label-form-group controls">
		              <label>Phone Number</label>
		              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
		              <p class="help-block text-danger"></p>
		            </div>
		          </div>
		          <div class="row control-group">
		            <div class="form-group col-xs-12 floating-label-form-group controls">
		              <label>Message</label>
		              <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
		              <p class="help-block text-danger"></p>
		            </div>
		          </div>
		          <div class="row control-group">
		            <div class="form-group col-xs-12 floating-label-form-group controls">
		              <label>2 + 3 = ?</label>
		              <input type="text" class="form-control" placeholder="2 + 3 = ?" id="human" name="human" required data-validation-required-message="Please answer the question.">
		              <p class="help-block text-danger"></p>
		            </div>
		          </div>
		          <br>
		          <div id="success"></div>
		          <div class="row">
		            <div class="form-group col-xs-12">
		              <button id="submit" name="submit" type="submit" value="Send" type="submit" class="btn btn-outline-dark">Send</button>
		            </div>
		          </div>
		        </form>
		      </div>
		    </div>
		  </div>
		</section>
		<a href="#pricing" class="btn btn-block btn-full-width page-scroll">Sign Up Now!</a>
		<footer class="footer">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 contact-details">
						<h4><i class="fa fa-phone"></i> Call</h4>
						<p>(830) 433-5350</p>
					</div>
					<div class="col-md-4 contact-details">
						<h4><i class="fa fa-map-marker"></i> Visit</h4>
						<p>664 N Hwy 123 Bypass, Suite 2
						  <br>Seguin, TX 78155
						</p>
					</div>
					<div class="col-md-4 contact-details">
						<h4><i class="fa fa-envelope"></i> Email</h4>
						<p><a href="mailto:info@bizboostermonthly.com">info@bizboostermonthly.com</a>
						</p>
					</div>
				</div>
				<div class="row social">
					<div class="col-lg-12">
						<ul class="list-inline">
							<li>
                <a href="https://www.facebook.com/TheBizBooster" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
							</li>
							<li>
                <a href="https://twitter.com/TheBizBooster" target="_blank"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
							</li>
              <li>
                <a href="https://instagram.com/bizboostermonthly/" target="_blank"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row copyright">
					<div class="col-lg-12">
						<p class="small">&copy; 2016 Biz Booster</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Portfolio Modals -->
		<!-- Example Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-1.jpg')">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
								<h2>Project Title</h2>
								<hr class="colored">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
							</div>
							<div class="col-lg-12">
								<img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
							</div>
							<div class="col-lg-8 col-lg-offset-2">
								<ul class="list-inline item-details">
									<li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
									</li>
									<li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
									</li>
									<li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
									</li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Example Modal 2 -->
		<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-2.jpg')">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
								<h2>Project Title</h2>
								<hr class="colored">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
							</div>
							<div class="col-lg-12">
								<img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
							</div>
							<div class="col-lg-8 col-lg-offset-2">
								<ul class="list-inline item-details">
									<li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
									</li>
									<li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
									</li>
									<li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
									</li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Example Modal 3 -->
		<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-3.jpg')">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
								<h2>Project Title</h2>
								<hr class="colored">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
							</div>
							<div class="col-lg-12">
								<img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
							</div>
							<div class="col-lg-8 col-lg-offset-2">
								<ul class="list-inline item-details">
									<li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
									</li>
									<li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
									</li>
									<li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
									</li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Example Modal 4 -->
		<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-4.jpg')">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
								<h2>Project Title</h2>
								<hr class="colored">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
							</div>
							<div class="col-lg-12">
								<img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
							</div>
							<div class="col-lg-8 col-lg-offset-2">
								<ul class="list-inline item-details">
									<li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
									</li>
									<li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
									</li>
									<li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
									</li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Core Scripts -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap/bootstrap.min.js"></script>
		<!-- Plugin Scripts -->
		<script src="assets/js/plugins/jquery.easing.min.js"></script>
		<script src="assets/js/plugins/classie.js"></script>
		<script src="assets/js/plugins/cbpAnimatedHeader.js"></script>
		<script src="assets/js/plugins/owl-carousel/owl.carousel.js"></script>
		<script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/plugins/background/core.js"></script>
		<script src="assets/js/plugins/background/transition.js"></script>
		<script src="assets/js/plugins/background/background.js"></script>
		<script src="assets/js/plugins/jquery.mixitup.js"></script>
		<script src="assets/js/plugins/wow/wow.min.js"></script>
		<script src="assets/js/contact_me.js"></script>
		<script src="assets/js/plugins/jqBootstrapValidation.js"></script>
		<!-- Vitality Theme Scripts -->
		<script src="assets/js/vitality.js"></script>
	</body>
</html>
