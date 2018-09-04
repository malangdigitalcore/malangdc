<?php
include "header.php";
?>
<body id="single-event__page">
      <!-- PRELOADER
        ================================================== -->
        <div id="loader-wrapper">
          <div id="loader"></div>
        </div>
        <?php
        include "navbar.php";
        ?>
        <!-- section home -->
        <section class="section__home">
          <div class="container home__body">
            <div class="row">
              <div class="col-sm-12">
                <div class="home__content">

                  <!-- Heading -->
                  <h1 class="home__heading">
                    Events
                  </h1>

                  <p style="color :#ffea01;"><b>Be part of it</b></p>

                </div> <!-- / .home__content -->
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .container -->

          <!-- Background image -->
          <div class="home__bg"></div>
        </section>

        <!-- section event -->
        <section class="section__event">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 col-md-8">
                <div class="event__item">
                  <div class="event__img">
                    <img src="assets/img/about_img-1.jpg" class="img-responsive">
                  </div>
                  <div id="event__timer"></div>
                  <div class="event__info">
                    <div class="event-info__item">
                      <i class="ion-android-pin"></i>
                      <p>New York, USA</p>
                    </div>
                    <div class="event-info__item">
                      <i class="ion-android-calendar"></i>
                      <p>October 9, 2017</p>
                    </div>
                    <div class="event-info__item">
                      <i class="ion-android-time"></i>
                      <p>8:00 am - 5:00 pm</p>
                    </div>
                  </div> <!-- .event__info -->
                  <div class="event__body">
                    <h2 class="event__title">Web Design meetup 2017</h2>
                    <p class="event__annotation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemounde suscipit.</p>
                    <h3 class="event-desc__title">Event description</h3>
                    <p class="event__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur, itaque repudiandae voluptatem. Voluptas accusantium officia quaerat odio minima ex aspernatur nihil modi, non sint excepturi cupiditate aliquam provident dignissimos dolore, repellendus laudantium perspiciatis? Nobis similique magni animi et nihil quisquam ullam.</p>
                    <p class="event__desc">Quaerat labore, voluptates explicabo reiciendis consequatur, nostrum cum. Temporibus ipsa suscipit ut accusamus tenetur, ipsam quae, quibusdam officiis, incidunt beatae reiciendis laborum, dolorem ipsum sapiente. Optio, totam ad deleniti alias facere laudantium, quod ducimus magni expedita nam molestiae similique sit nihil porro, libero maxime impedit accusamus quaerat ex eius cumque aliquid.</p>
                    <h3 class="event-desc__title">Meetup content</h3>
                    <ul class="event__list">
                      <li><i class="ion-android-arrow-forward"></i> Meeting of participants</li>
                      <li><i class="ion-android-arrow-forward"></i> Check in</li>
                      <li><i class="ion-android-arrow-forward"></i> Speeches</li>
                      <li><i class="ion-android-arrow-forward"></i> Coffee break</li>
                      <li><i class="ion-android-arrow-forward"></i> Discussion</li>
                    </ul>
                    <p class="event__desc">Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur udiandae voluptatem. Voluptas accusantium officia quaerat minima ex aspernatur excepturi cupiditate aliquam provident dignissimos repellendus laudantium perspiciatis? Nobis similique magni animi et nihil quisquam ullam.</p>
                    <div class="event__price">
                      <h3 style="color: #fff">Ticket Price: <span>25k</span></h3> 
                    </div>
                  </div> <!-- .event__body -->
                  <div class="event__speakers">
                    <div class="row">
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="teacher__item">
                          <div class="teacher__info">
                            <div class="teacher__name">
                              Steaven Martins
                            </div>
                            <div class="teacher__prof">
                              Ecology / Professor
                            </div>
                          </div> <!-- / .teacher__info -->
                          <div class="teacher__img">
                            <img src="assets/img/teacher_6.jpg" class="img-responsive" alt="...">
                          </div>
                        </div> <!-- / .teacher__item -->
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="teacher__item">
                          <div class="teacher__info">
                            <div class="teacher__name">
                              Eric Bronson
                            </div>
                            <div class="teacher__prof">
                              Design / Professor
                            </div>
                          </div> <!-- / .teacher__info -->
                          <div class="teacher__img">
                            <img src="assets/img/teacher_8.jpg" class="img-responsive" alt="...">
                          </div>
                        </div> <!-- / .teacher__item -->
                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- .event__speakers -->
                </div> <!-- .event__item -->
              </div>
              <div class="col-sm-5 col-md-4">
                <div class="event__sidebar">

                  <div class="sidebar__item">
                    <p class="subheading">Register now</p>
                    <form class="register__form" role="form">
                      <div class="form-group">
                        <label class="sr-only">Full name</label>
                        <input type="text" class="form-control" placeholder="Full name">
                      </div>
                      <div class="form-group">
                        <label class="sr-only">Your phone</label>
                        <input type="tel" class="form-control" placeholder="Your phone">
                      </div>
                      <div class="form-group">
                        <label class="sr-only">E-mail</label>
                        <input type="email" class="form-control" placeholder="E-mail">
                      </div>
                      <div class="form-group">
                        <label class="sr-only">Ticket type</label>
                        <select class="form-control">
                          <option value="1" selected="">Ticket type</option>
                          <option value="2">Type #1</option>
                          <option value="3">Type #2</option>
                          <option value="4">Type #3</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-accent btn-block ">
                        Register
                      </button>
                    </form>
                  </div> <!-- .sidebar__item -->  
                </div> <!-- .sidebar__item -->

                <div class="sidebar__item"> 
                  <p class="subheading">Recent events</p>
                  <div class="recent__posts">
                    <div class="sidebar__post">
                      <a class="sidebar_post__img" href="#" title="">
                        <img src="assets/img/instagram_img-4.jpg" class="img-responsive" alt="...">
                      </a>
                      <div class="sidebar_post__detail">
                        <h5><a href="#" title="">LCTRS conference 2017</a></h5>
                        <span>June 02, 2017</span>
                      </div>
                    </div> <!-- Sidebar Post -->
                    <div class="sidebar__post">
                      <a class="sidebar_post__img" href="#" title="">
                        <img src="assets/img/instagram_img-2.jpg" class="img-responsive" alt="...">
                      </a>
                      <div class="sidebar_post__detail">
                        <h5><a href="#" title="">Summer events</a></h5>
                        <span>October 09, 2017</span>
                      </div>
                    </div> <!-- Sidebar Post -->
                    <div class="sidebar__post">
                      <a class="sidebar_post__img" href="#" title="">
                        <img src="assets/img/instagram_img-3.jpg" class="img-responsive" alt="...">
                      </a>
                      <div class="sidebar_post__detail">
                        <h5><a href="#" title="">Web design meetup</a></h5>
                        <span>October 17, 2017</span>
                      </div>
                    </div> <!-- Sidebar Post -->
                  </div> <!-- .popular__posts -->
                </div> <!-- .sidebar__item -->
              </div> <!-- .blog__sidebar -->
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section event -->

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&amp;callback=initMap" async defer></script>

  </body>
  </html>