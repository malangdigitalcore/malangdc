<?php
require_once "header.php";

//Query Read Table Fakultas
$query = mysql_query("SELECT * FROM telepon");

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
          <h3 class="panel-title">Data Telepon</h3>
        </header>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="margin-bottom-15">
                <a href="ms_telepon_form.php">
                  <button class="btn btn-warning">
                    <i class="icon wb-plus"></i> <b>Tambah Data</b>
                  </button>
                </a>
              </div>
            </div>
          </div>
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th><div align="center">Nomor</div></th>
                <th>Telepon</th>
                <th>Pemilik Kontak</th>
                <th><div align="center">Status</div></th>
                <th><div align="center">Update</div></th>
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
                  
                  <td style='text-align:center;vertical-align:middle'><b><?php echo $data['kode_telepon']?></b></td>
                  <td style='vertical-align:middle'><?php echo $data['telepon']?></td>
                  <td style='vertical-align:middle'><?php echo $data['pemilik_kontak']?></td>
                  <td style='text-align:center;vertical-align:middle'>
                    <h4>
                      <span class="label label-round 
                      <?php if ($data['aktif'] == '1'){echo "label-info";}else{echo "label-danger";}?>">
                      <?php echo $statusdata?></span>
                    </h4>
                  </td>
                  <td style='text-align:center;vertical-align:middle'>
                    <button type="button" class="btn btn-primary btn-sm" 
                    onclick="window.location.href='ms_telepon_form.php?mode=edit&idmode=<?php echo $data['kode_telepon']?>'">
                    <i class="icon fa fa-refresh"></i>
                    <b>Update</b>
                  </button>
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