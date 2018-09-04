<?php
include "header.php";

//URL View
$url_view      = "coworking_reservation.php";

//Kode Reservasi
$query         = mysql_query("SELECT MAX(RIGHT(kode_reservasi, 1)) FROM reservation");
$data          = mysql_fetch_array($query);
$count         = $data[0] + 1;
$kode_reservasi= "R".date('Y').$count;

//Post
$event           = $_POST['event'];
$perusahaan      = $_POST['perusahaan'];
$nama_pemesan    = $_POST['nama_pemesan'];
$no_telepon      = $_POST['no_telepon'];
$tanggal_mulai   = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$jam_mulai       = $_POST['jam_mulai'];
$jam_selesai     = $_POST['jam_selesai'];
$email           = $_POST['email'];
$keterangan      = $_POST['keterangan'];
$today           = date('Y-m-d');
$action          = $_POST['action'];

if ($action == 'simpan') {
    $query_simpan = mysql_query("INSERT INTO reservation VALUES(
        '$kode_reservasi',
        '$perusahaan',
        '$event',
        '$nama_pemesan',
        '$no_telepon',
        '$tanggal_mulai',
        '$tanggal_selesai',
        '$jam_mulai',
        '$jam_selesai',
        '$email',
        '$keterangan',
        '$today'
    )");
    echo "<script type='text/javascript'>alert('Terima Kasih, Pesanan sudah kami simpan. Akan kami hubungi untuk informasi lebih lanjut');</script>";
    redirect($url_view);
}
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
                                        Co - Working Spaces
                                    </h1>
                                    
                                    <h3 class="home__title" data-aos="zoom-in" data-aos-delay="2000" style="font-size: 20px;">
                                        The place where it all starts
                                    </h3>
                                </div>
                            </div> <!-- / .home__content -->
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
                <!-- Background image -->
                <div class="home-parallax__bg" style="transform: translateY(0px);"></div>
            </section> <!-- .section__home -->
            
            <section class="section__get-in-touch" style="margin-top:30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                                <h2 class="section__title dark__title">
                                Reservation  
                            </h2>
                                <p class="section_title__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
                                </p> <!-- / .section_title__desc -->	
                        </div>
                    </div> <!-- / .row -->
                    <div class="row">
                            <!-- Form -->
                            <form method="POST" style="margin-top:50px;">
                                <!-- Email -->
                                <div class="col-sm-12" style="margin-top:-30px;">
                                <div class="form-group">
                                    <label>Company / Instance</label>
                                    <input type="hidden" class="form-control" value="<?php echo $kode_reservasi?>">
                                    <input type="text" name="perusahaan" class="form-control" placeholder="Enter your company or instance name">
                                    <span class="help-block">You can fill <b>"none"</b> if you're not in one</span>
                                </div>
                                </div>

                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Your Event</label>
                                    <input type="text" name="event" class="form-control" placeholder="Enter your event name">
                                </div>
                                </div>
                                
                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="nama_pemesan" class="form-control" placeholder="Enter your name">
                                    <span class="help-block">Name of the person who's responsible for the reservation</span>
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="no_telepon" class="form-control" placeholder="Enter your phone number">
                                    <span class="help-block">Phone number we can contact with</span>
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="tanggal_mulai" class="form-control">
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" name="tanggal_selesai" class="form-control">
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>Start Hour</label>
                                    <input type="time" name="jam_mulai" class="form-control">
                                    <span class="help-block">Format in AM/PM</span>
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label>End Hour</label>
                                    <input type="time" name="jam_selesai" class="form-control">
                                    <span class="help-block">Format in AM/PM</span>
                                </div>
                                </div>

                                <div class="col-sm-12">
                                <!-- Message -->
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="keterangan" class="form-control" rows="6" placeholder="Enter your message"></textarea>
                                    <span class="help-block"></span>
                                    <span class="help-block">You can ask or request something that can support your event (ex. "Can we request chair for 50 persons ?")</span>
                                </div>

                                <div class="form-group">
                                    <label>Emails</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                    <span class="help-block">You can fill <b>"none"</b> if you're not in one</span>
                                </div>
                                <!-- Submit -->
                                <button type="submit" class="btn btn-block btn-accent" name="action" value="simpan">
                                <b>Simpan</b>
                            </button>
                                </div>
                            </form>  	
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
            </section>
            <?php
            include "footer.php";
            ?>
            </html>