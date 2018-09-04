<?php
require_once "header.php";

//Query Read Table Fakultas
$query = mysql_query("SELECT * FROM reservation");


?>
<body>
  <div class="se-pre-con"></div>
  <?php
  require_once "navbar.php";
  require_once "sidebar.php";
  ?>
  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Malang Digital Core - <b>Admin Area</b></h1>
    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Data Reservasi Coworking</h3>
        </header>
        <div class="panel-body">
        <table class="table table-striped table-bordered toggle-circle" data-paging="true" data-filtering="true" id="exampleRowToggler">
            <thead>
              <tr>
                <th><div align="center">No. Reservasi</div></th>
                <th>Perusahaan</th>
                <th><div align="center">Pemesan</div></th>
                <th><div align="center">No. Telp</div></th>
                <th><div align="center">Tgl Mulai</div></th>
                <th><div align="center">Tgl Selesai</div></th>
                <th><div align="center">Event</div></th>
                <th data-breakpoints="all"><div align="center">Jam Mulai</div></th>
                <th data-breakpoints="all"><div align="center">Jam Selesai</div></th>
                <th data-breakpoints="all"><div align="center">Email</div></th>
                <th data-breakpoints="all"><div align="center">Tgl Pesan</div></th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($data = mysql_fetch_array($query)) {
                switch ($data['aktif']) {
                  case '1' : $statusdata = 'Aktif'; break;
                  case '2' : $statusdata = 'Tidak Aktif'; break;
                }
                ?>
                <tr>
                  
                  <td style='text-align:center;vertical-align:middle'><b><?php echo $data['kode_reservasi']?></b></td>
                  <td style='vertical-align:middle'><?php echo $data['perusahaan']?></td>
                  <td style='text-align:center;vertical-align:middle'><?php echo $data['nama_pemesan']?></td>
                  <td style='text-align:center;vertical-align:middle'><?php echo $data['no_telepon']?></td>
                  <td style='text-align:center;vertical-align:middle'>
                    <?php 
                    $tempDate = explode('-',$data['tanggal_mulai']);
                    $date = $tempDate[2].'-'.$tempDate[1].'-'.$tempDate[0];
                    echo $date;
                    ?>
                  </td>
                  <td style='text-align:center;vertical-align:middle'>
                    <?php 
                    $tempDate = explode('-',$data['tanggal_selesai']);
                    $date = $tempDate[2].'-'.$tempDate[1].'-'.$tempDate[0];
                    echo $date;
                    ?>
                  </td>
                  <td style='text-align:center;vertical-align:middle'><b><?php echo $data['event']?></b></td>
                  <td style='text-align:center;vertical-align:middle'>
                    <?php 
                    $tempDate = explode(':',$data['jam_mulai']);
                    $date = $tempDate[0].':'.$tempDate[1];
                    echo $date;
                    ?>
                  </td>
                  <td style='text-align:center;vertical-align:middle'>
                    <?php 
                    $tempDate = explode(':',$data['jam_selesai']);
                    $date = $tempDate[0].':'.$tempDate[1];
                    echo $date;
                    ?>
                  </td>
                  <td style='text-align:center;vertical-align:middle'><?php echo $data['email']?></td>
                  <td style='text-align:center;vertical-align:middle'>
                    <?php 
                    $tempDate = explode('-',$data['tanggal_pesan']);
                    $date = $tempDate[2].'-'.$tempDate[1].'-'.$tempDate[0];
                    echo $date;
                    ?>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic -->
      </div>
    </div>
    <!-- End Page -->
    <!-- Footer -->
    <?php
    require_once "footer.php";
    require_once "JS.php";
    ?>
  </body>
  </html>