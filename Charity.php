<?php
$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //submit the form
        $userName = $_POST['user'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['messagesubject'];
        $message = $_POST['message'];


        $to = "mgego0581@gmail.com";
        $body = "";

        $body .= "Form: " . $userName . "\r\n";
        $body .= "Form: " . $userEmail . "\r\n";
        $body .= "Form: " . $message . "\r\n";

        //mail($to, $messageSubject, $body);
        $message_sent = true;
    }
}


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anwar Organization</title>
	<meta charset="utf-8">
    <meta name="description" content="Charity Website">
    <meta name="keywords" content="charity , donation , donors">
    <meta name="author" content="MuhammedAnwar">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="bg-dark">
	<?php
	if($message_sent):
	?>
	<h3>Thanks, We'll be in touch.</h3>
	<?php
	else:
	?>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target bg-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="#home-section">Anwar<span>.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services & Opinions</span></a></li>
					<li class="nav-item"><a href="site/project.html" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="site/donation.html" class="nav-link"><span>Donation</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--first slide-->
	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(images/1.jpg); ">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading" >CharityOrganization</span>
								<h1 class="mb-4 mt-3" id="rory">Donate To Make<br> a Better World.</h1>
								<p><a href="donation.html" class="btn btn-success btn-outline-success text-light" id="farida">Donate Now</a></p>
								<ul class="ftco-footer-social list-unstyled mt-2">
									<li class="ftco-animate" id="a"><a href="https://twitter.com/MuhammedAnwar29"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.facebook.com/mohammed.jimmy.359126"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.instagram.com/muhammedahmedanwar/"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--second slide-->
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(images/2.jfif); background-size: cover;" >
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">We Help People</span>
								<h1 class="mb-4 mt-3" id="rory">Support Causes <br>you Care about.</h1>
								<p> <a href="donation.html" class="btn btn-success btn-outline-success text-light" id="farida">Donate Now</a></p>
								<ul class="ftco-footer-social list-unstyled mt-2">
									<li class="ftco-animate" id="a"><a href="https://twitter.com/MuhammedAnwar29"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.facebook.com/mohammed.jimmy.359126"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.instagram.com/muhammedahmedanwar/"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--counter-->
	<section class="ftco-counter img bg-light" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-suitcase" id="b"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="1200">0</strong>
							<span>Project Complete</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-loyalty" id="b"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="3000" >0</strong>
							<span>Happy Clients</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-coffee" id="b"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="10000">0</strong>
							<span>Cups of coffee</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-calendar" id="b"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="8000">0</strong>
							<span>Families rescued</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--about us-->
	<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb bg-light" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center" id="img" style="background-image:url(images/3.jfif);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">Intro</span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;" >About US</h2>
								<p>The purpose of our lives is to be happy and rescue the people.</p>

								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span>Anwar Organization</span></li>
									<li class="d-flex"><span>Date of birth:</span> <span>Sept 29, 2021</span></li>
									<li class="d-flex"><span>Address:</span> <span>Ismailia</span></li>
									<li class="d-flex"><span>Email:</span> <span>mgego0581@gmail.com</span></li>
									<li class="d-flex"><span>Phone: </span> <span>+201098931572</span></li>
									<li class="d-flex"><span>Activites: </span>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="my-interest d-lg-flex w-100">
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-loyalty" id="b"></span>
										</div>
										<div class="text">Families rescued</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-app-development" id="b"></span>
										</div>
										<div class="text">Online Conference</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-advertising" id="b"></span>
										</div>
										<div class="text">volunteer</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-football" id="b"></span>
										</div>
										<div class="text">Sports</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Skills-->
	<section class="ftco-section bg-dark" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Skills</span>
					<h2 class="mb-4" id="b">Skills</h2>
					<p>“Not how long, but how well you have lived is the main thing.”</p>
				</div>
			</div>
			<div class="row progress-circle mb-5">
				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Donations</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='90'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">80%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">90%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Project Complete</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">95<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">90%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">92%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Make children learn better</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='98'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">98<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">95%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">97%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Administrative and organisational skills</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='99'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">99<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">97%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">98%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Supportive activity and good flexibility 
						</h2>
						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='92'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">92<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">90%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">89%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Commercial / business awareness 
						</h2>
						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='85'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">85<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">80%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">83%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>
			</div>
		</div>
	</section>
<!--send to us-->
	<section class="ftco-hireme">
		<div  style="background-image: url(images/41.jpg); background-attachment: fixed; background-repeat:no-repeat; background-size: cover;">
		<div class="container" id="services-section">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100 py-4">
						<h2 id="deja">Have any charity project on your mind.</h2>
						<p class="mb-0"><a href="#contact-section" class="btn btn-success py-3 px-4" id="farida">Contact US !</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	</section>
<!--opinions-->
	<section class="ftco-section testimony-section bg-primary">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
					<span class="subheading">Testimonies</span>
					<h2 class="mb-4" id="b">What client says about?</h2>
					<p></p>
				</div>
			</div>

			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">

						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">They Do Well.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/12.jpg)"></div>
										<div class="pl-3">
											<p class="name">MuhammedAnwar</p>
											<span class="position">WebDeveloper</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">They are very clever.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/6.jpg)"></div>
										<div class="pl-3">
											<p class="name">Ali Orabi</p>
											<span class="position">Translatory</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Spectacular People.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/7.jpg)"></div>
										<div class="pl-3">
											<p class="name">Ahmed Galhoum</p>
											<span class="position">Engineer</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Amazing Organization !.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/8.jpg)"></div>
										<div class="pl-3">
											<p class="name">YoussefFakhrEldein</p>
											<span class="position">Engineer</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">I Love This Charity.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/66.jpg)"></div>
										<div class="pl-3">
											<p class="name">Rawda Ragheb</p>
											<span class="position">Software Engineering</span>
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
	<section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Contact us</span>
					<h2 class="mb-4" id="b">Have a Charity Project?</h2>
				</div>
			</div>
<!--forms-->
	<form action="php/contact.php" method="POST" class="form">
	<div class="container register bg-primary">
	<div class="row">
		<div class="col-md-3">
			<img style="background-size:cover;" src="images/4.jpg" width="100%" height="100%" alt=""/>
		</div>
		<div class="col-md-9 register-right">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading" id="b">Contact US!</h3>
					<div class="row register-form">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name *" name="user" />
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="MessageSubject *" name="messagesubject" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email *" name="email" />
							</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-success py-3 px-5">
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex"id="b">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">
								<p><span>Address:</span> Ismailia</p>
							</div>
						</div>
						<div class="dbox w-100 d-flex" id="b">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel:+201098931572">+201098931572</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex" id="b">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:mgego0581@gmail.com">mgego0581@gmail.com</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex" id="b">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Website</span> <a href="#">AnwarOrganization.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</section>
	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2" id="b">Lets talk about</h2>
						<p><a href="Charity.html" class="btn btn-success" id="farida">Learn more</a></p>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2" id="b">Links</h2>
						<ul class="list-unstyled">
							<li id="b"><a href="#home-section"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
							<li id="b"><a href="#about-section"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
							<li id="b"><a href="#services-section"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
							<li id="b"><a href="project.html"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
							<li id="b"><a href="#contact-section"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2" id="b">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map marker" id="b"></span><span class="text">Ismailia</span></li>
								<li><a href="#"><span class="icon fa fa-phone" id="b"></span><span class="text">+201098931572</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane pr-4" id="b"></span><span class="text">mgego0581@gmail.com</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled mt-2">
							<li class="ftco-animate" id="a"><a href="https://twitter.com/MuhammedAnwar29"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.facebook.com/mohammed.jimmy.359126"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate" id="a"><a href="https://www.instagram.com/muhammedahmedanwar/"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank" id="b">MuhammedAnwar</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!--JS-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>