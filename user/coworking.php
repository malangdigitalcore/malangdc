<?php
include "header.php";
?>
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
            <?php
            include "navbar.php";
            ?>
            <!-- CONTENT
                ================================================== -->
                <section class="section__home"
                style="background: black url(assets/img/coworking.jpg) no-repeat center center / cover;" id="section__home">
                <div class="container home__body">
                    <div class="row">
                        <div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">
                            <div class="home__content">
                                <!-- Title -->
                                <!-- Heading -->
                                <div align="center">
                                    <h1 class="home__heading" data-aos="fade-up" data-aos-delay="1000" style="font-size: 50px;">
                                        Event Spaces
                                    </h1>
                                    
                                    <h3 class="home__title" data-aos="zoom-in" data-aos-delay="2000" style="font-size: 20px;">
                                        Obviously for events and occasions
                                    </h3>
                                    <a href="coworking_reservation.php" data-aos="zoom-in" data-aos-delay="2500" class="btn btn-primary"><b>Reserve Now !</b></a>
                                </div>
                            </div> <!-- / .home__content -->
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
                <!-- Background image -->
                <div class="home-parallax__bg" style="transform: translateY(0px);"></div>
            </section> <!-- .section__home -->
            
            <!-- section teachers -->
            <section class="section__teachers">
                <div class="container" style="margin-bottom:-80px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section_title__body">
                                <h2 class="dark__title" align="center" style="font-size: 40px;">
                                    just a few pictures
                                </h2>
                                <p align="center">
                                    Below are our best representative to represent our places that will suits you best for any puproses you need
                                </p> <!-- / .section_title__desc -->    
                            </div> <!-- / .section_title__body  -->
                        </div>
                    </div> <!-- / .row -->
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="teacher__item">
                                <div class="teacher__info">
                                    <div class="teacher__name">
                                        Main Lounge
                                    </div>
                                    <div class="teacher__prof">
                                        Where it all begin...
                                    </div>
                                </div> <!-- / .teacher__info -->
                                <div class="teacher__img item">
                                        <img src="assets/img/coworking1.jpg" class="img-responsive">
                                </div>
                            </div> <!-- / .teacher__item -->
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="teacher__item">
                                <div class="teacher__info">
                                    <div class="teacher__name">
                                        Main Lounge
                                    </div>
                                    <div class="teacher__prof">
                                        Desk and <b>High Speed</b> Internet is all you need...
                                    </div>
                                </div> <!-- / .teacher__info -->
                                <div class="teacher__img item">
                                    <img src="assets/img/coworking2.jpg" class="img-responsive" alt="...">
                                </div>
                            </div> <!-- / .teacher__item -->
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="teacher__item">
                                <div class="teacher__info">
                                    <div class="teacher__name">
                                        Main Lounge
                                    </div>
                                    <div class="teacher__prof">
                                        Whoa ! there's sofa here...
                                    </div>
                                </div> <!-- / .teacher__info -->
                                <div class="teacher__img item">
                                    <img src="assets/img/coworking3.jpg" class="img-responsive" alt="...">
                                </div>
                            </div> <!-- / .teacher__item -->
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="teacher__item">
                                <div class="teacher__info">
                                    <div class="teacher__name">
                                        Front Desk
                                    </div>
                                    <div class="teacher__prof">
                                        Where information dwelling...
                                    </div>
                                </div> <!-- / .teacher__info -->
                                <div class="teacher__img item">
                                    <img src="assets/img/coworking4.jpg" class="img-responsive" alt="...">
                                </div>
                            </div> <!-- / .teacher__item -->
                        </div>
                        
                        
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
            </section> <!-- .section__footer -->
            
            <!-- section pricing -->
            <section class="section__pricing" style="margin-bottom: -200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section__subtitle dark__subtitle">
                                What are you waiting for ? 
                            </div>
                            <h2 class="section__title dark__title">
                                Price & Benefits
                            </h2>
                        </div>
                    </div> <!-- / .row -->
                    
                    <div class="row">
                        <div class="col-sm-12">              
                            <div class="price__item price__item-1">
                                <div class="price_item__title">
                                    Co-Working Package
                                </div>
                                <div class="col-sm-4">
                                    <ul class="price_item__features">
                                        <li class="feature__include"><b>Time</b></li>
                                        <li class="feature__include">1 Hours</li>
                                        <li class="feature__include">3 Hours</li>
                                        <li class="feature__include">5 Hours</li>
                                        <li class="feature__include">10 Hours</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="price_item__features">
                                        <li class="feature__include"><b>Price(s)</b></li>
                                        <li class="feature__include">Rp 250.000,-</li>
                                        <li class="feature__include">Rp 550.000,-</li>
                                        <li class="feature__include">Rp 950.000,-</li>
                                        <li class="feature__include">Rp 1.950.000,-</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="price_item__features">
                                        <li class="feature__include"><b>Facilities</b></li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> 60 - 150 Person Capacity</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> 3000 Lumens Projector</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> Projector Screen</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> Hi-Speed Internet</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> Portable Sound</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> White Board</li>
                                        <li class="feature__include"><i class="ion-checkmark-round"></i> Short Video & 10 Photos</li>
                                        <li class="feature__include">Need more hours ? <a href="../index.php">contact us !</a></li>
                                    </ul>
                                </div>
                                <a href="coworking_reservation.php" class="btn btn-primary"><b>Reserve Now !</b></a>
                            </div> <!-- / .price__item -->
                        </div>
                    </div>
                </div> <!-- / .container -->
            </section> <!-- .section__footer -->
            <?php
            include "footer.php";
            ?>
            </html>