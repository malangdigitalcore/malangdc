<?
include "user/functions.php";
opendb();
include "user/model.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	
	<title>We're Helping Your Startup Growth</title>
	<link href="assets/img/MDC2.png" rel="icon">
	
	<!-- CSS Plugins -->
	<link href="user/assets/plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<link href="user/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="user/assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" >
	<link href="user/assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="user/assets/plugins/aos-master/dist/aos.css" rel="stylesheet">
	
	<!-- CSS Global -->
	<!--build:css assets/css/theme.min.css-->
	<link href="user/assets/css/theme.css" rel="stylesheet" >
	<!--endbuild-->
	
</head>
<body id="index__page">
	
	<!-- Back to top button
		================================================== -->
		<a id="back-to-top" href="#section__home" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
			<i class="ion-android-arrow-up"></i>
		</a>
		
		<!-- PRELOADER
			================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
			
			<!-- Navbar
				================================================== -->
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						
						<!-- Header -->
						<div class="navbar-header">
							
							<!-- Collapse toggle -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
								<span class="sr-only">Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<!-- Logo -->
							<a class="navbar-brand" href="index.php">
								<img src="user/assets/img/MDC2.png" style="width:50px;margin-top: -7px;">
							</a>
							
						</div> <!-- / .navbar-header -->
						
						<!-- Links -->
						<div class="collapse navbar-collapse" id="navbar__collapse">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="index.php">Home</a></li>
								<li><a href="user/coworking.php">Event Space</a></li>
								<li><a href="user/coworking2.php">Co-Working</a></li>
								<li><a href="#">Startup Office</a></li>
								<li><a href="admin/index.php">Login</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="https://www.facebook.com/MalangDigitalCore/"><i class="ion-social-facebook" style="font-size: 20px;"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/malangdigitalcore/"><i class="ion-social-instagram" style="font-size: 20px;"></i></a>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container -->
				</nav>
				
				<!-- CONTENT
					================================================== -->
					<section class="section__home" 
					style="background: black url(user/assets/img/BG.jpg) no-repeat center center / cover;" id="section__home">
					<div class="container home__body">
						<div class="row">
							<div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">
								<div class="home__content">
									<!-- Title -->
									<!-- Heading -->
									<div align="center">
										<div>
											<img src="user/assets/img/MDC2.png" style="width: 180px;" data-aos="zoom-in" data-aos-delay="2500">
										</div>
										
										<h1 class="home__heading" data-aos="zoom-in" data-aos-delay="1000" style="font-size: 100px;">
											M D C
										</h1>
										
										<h3 class="home__title" data-aos="zoom-in" data-aos-delay="2000" style="font-size: 20px;">
											Malang <b>Digital Core</b>
										</h3>
									</div>
								</div> <!-- / .home__content -->
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
					<!-- Background image -->
					<div class="home-parallax__bg" style="transform: translateY(0px);"></div>
				</section> <!-- .section__home -->
				
				<!-- section coming-soon -->
				<section class="section__coming-soon">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-lg-6">
								<div id="clock"></div> <!-- / #clock -->
								<h4 style="color: #2d4052;">
									To the next <b>Event</b>
								</h4>
								<div class="coming-soon__text">
									<h2 class="coming-soon__title">Startup Weekend <span style="color: #ffea01;">2018</span></h2>
									<p class="coming-soon__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur omnis nam consequatur, illum aliquid optio quidem nemo necessitatibus velit! Laboriosam porro amet iste, quisquam deserunt optio consequatur itaque numquam provident.</p>
									<p class="coming-soon__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ea, omnis voluptates, vero ab alias harum totam animi corporis excepturi in, facere mollitia quasi nihil illo placeat? Optio, corrupti quis.</p>
								</div>
							</div>
							<div class="col-md-5 col-lg-6">
								<div class="coming-soon__img">
									<img src="user/assets/img/coming.jpg" class="img-responsive">
								</div>
								<div class="coming-soon__btn text-center">
									<a href="events_detail.php" class="btn btn-primary"><b>See Detail</b></a>							
								</div>
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</section> <!-- .section__footer -->
				
				<!-- section courses -->
				<section class="section__courses">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="section__subtitle light__subtitle">
									Explore our best startup <span style="color: #ffea01;">facilities</span>
								</div>
								<h2 class="section__title light__title">
									OUR FACILITIES
								</h2>
							</div>
						</div> <!-- / .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="courses_item__wrapper">
									<div class="courses__item">
										<div class="card__top">
											<div class="courses__icon courses_icon-1">
												<i class="ion-ios-chatboxes-outline"></i>
											</div>
											<div class="courses__title">
												Co-Working
											</div>
											<p class="courses__desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
											</p>
										</div> <!-- / .card__top -->
										<div class="card__back">
											<div class="card_back__wrapper">
												<div class="courses__title">
													Co-Working
												</div>
												<ul class="course__info">
													<li>Opens Monday - Saturday</li>
													<li>
														<i class="ion-clock course-calendar" aria-hidden="true"></i> &nbsp8 a.m - 10 p.m
													</li>
													<li>
														<i class="ion-cash course-calendar" aria-hidden="true"></i>
														Price : <a href=""><span style="color:#212260;">see detail</span></a>
													</li>
												</ul> <!-- / .course__info -->
												<a href="courses.html" class="btn btn-primary text-center"><b>Learn More</b></a>
											</div> <!-- / .card_back__wrapper -->
										</div> <!-- / .card__back -->
									</div> <!-- / .courses__item -->
								</div> <!-- / .courses_item__wrapper -->
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="courses_item__wrapper">
									<div class="courses__item">
										<div class="card__top">
											<div class="courses__icon courses_icon-2">
												<i class="ion-ios-briefcase-outline"></i>
											</div>
											<div class="courses__title">
												Startup Office
											</div>
											<p class="courses__desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
											</p>
										</div> <!-- / .card__top -->
										<div class="card__back">
											<div class="card_back__wrapper" data-aos="zoom-in-up">
												<div class="courses__title">
													Startup Office
												</div>
												<ul class="course__info">
													<li>Available for rents</li>
													<li>
														<i class="ion-clock course-calendar" aria-hidden="true"></i> &nbsp8 a.m - 10 p.m
													</li>
													<li>
														<i class="ion-cash course-calendar" aria-hidden="true"></i>
														Price : <span style="color:#212260;">$ 154</span> / month
													</li>
												</ul> <!-- / .course__info -->
												<a href="courses.html" class="btn btn-primary text-center"><b>Learn More</b></a>
											</div> <!-- / .card_back__wrapper -->
										</div> <!-- / .card__back -->
									</div> <!-- / .courses__item -->
								</div> <!-- / .courses_item__wrapper -->
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="courses_item__wrapper">
									<div class="courses__item">
										<div class="card__top">
											<div class="courses__icon courses_icon-3">
												<i class="ion-ios-lightbulb-outline"></i>
											</div>
											<div class="courses__title">
												Incubation Room
											</div>
											<p class="courses__desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
											</p>
										</div> <!-- / .card__top -->
										<div class="card__back">
											<div class="card_back__wrapper" data-aos="zoom-in-up">
												<div class="courses__title">
													Incubation Room
												</div>
												<ul class="course__info">
													<li>Available for Events Only</li>
													<li>
														<i class="ion-clock course-calendar" aria-hidden="true"></i> &nbspBy Request
													</li>
													<li>
														<i class="ion-cash course-calendar" aria-hidden="true"></i>
														Price : <a href=""><span style="color:#212260;">Call Us !</span></a>
													</li>
												</ul> <!-- / .course__info -->
												<a href="courses.html" class="btn btn-primary text-center"><b>Learn More</b></a>
											</div> <!-- / .card_back__wrapper -->
										</div> <!-- / .card__back -->
									</div> <!-- / .courses__item -->
								</div> <!-- / .courses_item__wrapper -->
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="courses_item__wrapper">
									<div class="courses__item">
										<div class="card__top">
											<div class="courses__icon courses_icon-4">
												<i class="ion-ios-flask-outline"></i>
											</div>
											<div class="courses__title">
												Startup Weekend
											</div>
											<p class="courses__desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
											</p>
										</div> <!-- / .card__top -->
										<div class="card__back">
											<div class="card_back__wrapper">
												<div class="courses__title">
													Startup Weekend
												</div>
												<ul class="course__info">
													<li>Our Annual Events !!!</li>
													<li>
														<i class="ion-clock course-calendar" aria-hidden="true"></i> &nbspAnually
													</li>
													<li>
														<i class="ion-ios-telephone course-calendar" aria-hidden="true"></i>
														&nbsp&nbspInfo : <span span style="color:#212260;">+6281-2597-6873</span>
													</li>
												</ul> <!-- / .course__info -->
												<a href="courses.html" class="btn btn-primary text-center"><b>Learn More</b></a>
											</div> <!-- / .card_back__wrapper -->
										</div> <!-- / .card__back -->
									</div> <!-- / .courses__item -->
								</div> <!-- / .courses_item__wrapper -->
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</section> <!-- .section__courses -->
				
				<!-- section blog -->
				<section class="section__blog" style="background-color: #ebebeb;">
					<div class="container">
						<div class="row">
							<?php while($data_artikel = mysql_fetch_array($query_artikel)) {?>
							<div class="col-sm-12 col-md-12">  	    	
								<div class="blog__item" >
									<div class="blog-item__img">
										<img src="admin/<?php echo $data_artikel['thumbnail']?>" style="height:400px;width:1138px;">
									</div><br>
									<div class="blog-item__content">
										<div class="blog-item__date">
											<i class="ion-calendar"></i> <?php echo date('d F Y', strtotime($data_artikel['tanggal']))?>
										</div>
										<div class="blog-item__title">
											<h3><?php echo $data_artikel['judul']?></h3>
										</div>
										<div class="blog-item__info">
											<ul class="item-info__list">
												<li class="info-list__item"><i class="ion-android-person"></i> &nbsp;by <?php echo $data_artikel['penulis']?></li>
											</ul>
										</div>
										<div class="blog-item__text">
											<?php echo $data_artikel['deskripsi']?>
										</div>
										<div class="blog-item__link">
											<a href="#">Read More <i class="ion-android-arrow-forward"></i></a>
										</div>
										<!-- <ul class="blog-item__share">
											<li>Share: </li>
											<li><a href="#"><i class="ion-social-twitter"></i></a></li>
											<li><a href="#"><i class="ion-social-facebook"></i></a></li>
											<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
										</ul> -->
									</div> <!-- / .blog-item__content -->
								</div> <!-- / .blog__item -->
							</div>
							<?php }?>
							<div class="col-xs-12">
								<div class="text-center">
									<a href="blog-right-sidebar.html" class="btn btn-accent btn-lg"><b>See all Post</b></a>	
								</div>
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</section> <!-- .section__footer -->
				
				<!-- section contact -->
				<section class="section__contact">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="section_title__body">
									<h1 class="dark__title">
										Have great idea ? <b>Let us Know</b> 
									</h1>
									<p class="section_title__desc">
										
									</p> <!-- / .about__desc -->   
								</div> <!-- / .section_title__body  -->
							</div>
						</div> <!-- / .row -->
						<div id="map"></div>
						<div class="row">
							<div class="col-sm-12">
								<div class="contact_info__body">
									<div class="contact_info__item">
										<div class="contact__title">
											Write us<span style="color: #e6f72e;">.</span>
										</div>
										<div class="contact__info">
											<div class="contact_info__wrapper">
												<h3>Email</h3>
												<p>
													<?php
													while($data_email = mysql_fetch_array($query_email)) {
														echo $data_email['email']."<br>";
													}
													?>
												</p>
											</div>
										</div> <!-- / .contact__info -->
									</div> <!-- / .contact_info__item -->
									<div class="contact_info__item">
										<div class="contact__title">
											Call us<span style="color: #e6f72e;">.</span>
										</div>
										<div class="contact__info">
											<div class="contact_info__wrapper">
												<h3>Phone Number</h3>
												<p>
													<?php
													while($data_telepon = mysql_fetch_array($query_telepon)) {
														echo $data_telepon['telepon']." - ".$data_telepon['pemilik_kontak']."<br>";
													}
													?>
												</p>
											</div>
										</div> <!-- / .contact__info -->
									</div> <!-- / .contact_info__item -->
									<div class="contact_info__item">
										<div class="contact__title">
											Visit us<span style="color: #e6f72e;">.</span>
										</div>
										<div class="contact__info">
											<div class="contact_info__wrapper">
												<h3>Head office</h3>
												<p>
													<?php
													while($data_alamat = mysql_fetch_array($query_alamat)) {
														echo $data_alamat['alamat']."<br>";
													}
													?>
												</p>
											</div>
										</div> <!-- / .contact__info -->
									</div> <!-- / .contact_info__item -->
								</div> <!-- / .contact_info__body -->
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</section> <!-- .section__footer -->
				<!-- section instagram -->
				<section class="section__instagram">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section__subtitle instagram__title">
									Never miss our news on Instagram <a href="#">@malangdigitalcore</a>
								</div>
							</div>
						</div> <!-- / .row -->
						<div class="row">
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta1.jpg" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta2.jpg" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta3.jpg" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta4.jpg" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta5.jpg" class="img-responsive">
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="intagram_img__body">
									<a href="#" class="insagram__img">
										<img src="user/assets/img/insta2.jpg" class="img-responsive">
									</a>
								</div>
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</section> <!-- .section__footer -->
				
				<!-- section footer copyright -->
				<div class="footer__copyright">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
								<ul class="quick__links">
									<li>| <a href="#">Home</a> |</li>
									<li><a href="#">About</a> |</li>
									<li><a href="#">Co-Working</a> |</li>
									<li><a href="#">Startup Office</a> |</li>
									<li><a href="#">Events</a> |</li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
								<div class="copyright__content">
									<p>&#169; Malang Digital Core 2018 All rights reserved.</p>
								</div>
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .container -->
				</div> <!-- / .footer__copyright -->
				
				<!-- JS Global -->
				<script src="user/assets/plugins/jquery/jquery-1.12.4.min.js"></script>
				<script src="user/assets/js/bootstrap.min.js"></script>
				
				<!-- JS Plugins -->
				<script src="user/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
				<script src="user/assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
				<script src="user/assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
				<script src="user/assets/plugins/countTo/jquery.countTo.js"></script>
				<script src="user/assets/plugins/countdown/jquery.countdown.min.js"></script>
				<script src="user/assets/plugins/aos-master/dist/aos.js"></script>
				<script src="user/assets/plugins/contact/contact.js"></script>
				<script src="user/assets/plugins/smothscroll/smoothscroll.js"></script>
				
				<!-- JS Custom -->
				<!--build:js assets/js/theme.min.js -->
				<script src="user/assets/js/theme.js"></script>
				<!-- endbuild -->
				<script src="user/assets/js/google_maps.js"></script>
				
				<!-- Google Maps -->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&amp;callback=initMap" async defer></script>
				
			</body>
			
			
			</html>