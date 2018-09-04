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
						<img src="assets/img/insta1.jpg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="intagram_img__body">
					<a href="#" class="insagram__img">
						<img src="assets/img/insta2.jpg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="intagram_img__body">
					<a href="#" class="insagram__img">
						<img src="assets/img/insta3.jpg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="intagram_img__body">
					<a href="#" class="insagram__img">
						<img src="assets/img/insta4.jpg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="intagram_img__body">
					<a href="#" class="insagram__img">
						<img src="assets/img/insta5.jpg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="intagram_img__body">
					<a href="#" class="insagram__img">
						<img src="assets/img/insta2.jpg" class="img-responsive">
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
<script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- JS Plugins -->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
<script src="assets/plugins/countTo/jquery.countTo.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="assets/plugins/aos-master/dist/aos.js"></script>
<script src="assets/plugins/contact/contact.js"></script>
<script src="assets/plugins/smothscroll/smoothscroll.js"></script>

<!-- JS Custom -->
<!--build:js assets/js/theme.min.js -->
<script src="assets/js/theme.js"></script>
<!-- endbuild -->
<script src="assets/js/google_maps.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbmFJcCV807s4CkYY0fw6O-NGmKqcLxFs&amp;callback=initMap" async defer></script>

</body>
