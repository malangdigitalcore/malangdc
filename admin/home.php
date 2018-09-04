<?php
require_once "header.php";

$url_view = "home.php";

$action = $_POST['action'];

if ($action=='kurikulum') {
  $query_profillulusan = mysql_query("UPDATE pdprodi_ms_profillulusan SET
  aktif = 2,
  status_pemakaian = 0
  WHERE 
  kode_pl <> PL000001");

  $query_bidangkajian  = mysql_query("UPDATE pdprodi_ms_bidangkajian SET
  aktif = 2,
  status_pemakaian = 0
  WHERE
  kode_prodi = '$_SESSION[kode_prodi]'");

  $query_mk = mysql_query("UPDATE pdprodi_ms_matakuliah SET
  jenis_mk = 1,
  status_validasi = 1,
  dosen_pengampu = '00000001',
  kode_dosen = '00000001',
  status_pemakaian = 0
  WHERE
  kode_prodi = '$_SESSION[kode_prodi]'");

  $query_cplvspl = mysql_query("DELETE FROM pdprodi_ts_cplvspl WHERE SUBSTRING(kode_cpl, 5, 2) = '$_SESSION[kode_prodi]'");
  $query_cplvsbk = mysql_query("DELETE FROM pdprodi_ts_cplvsbk WHERE SUBSTRING(kode_cpl, 5, 2) = '$_SESSION[kode_prodi]'");
  echo "<script type='text/javascript'>alert('Data Profil Lulusan, Bidang Kajian, Mata Kuliah telah diperbarui');</script>";
  redirect($url_view);
} else if ($action=='rps') {
  $query_rps = mysql_query("UPDATE pdprodi_ms_rps SET
  aktif = 2,
  status_perkuliahan = 1");

  $query_topikbahasan = mysql_query("UPDATE pdprodi_ms_topikbahasan SET
  aktif = 2");

  $query_materipemb = mysql_query("UPDATE pdprodi_ms_materipembelajaran SET
  aktif = 2");

  $query_materi = mysql_query("UPDATE pdprodi_ms_rpsmateri SET
  publikasi = 0");
  echo "<script type='text/javascript'>alert('Data RPS, Topik Bahasan, Materi Pembelajaran telah diperbarui');</script>";
  redirect($url_view);
}

?>
<body class="dashboard">
	<?php
	require_once "navbar.php";
	require_once "sidebar.php";
	?>
	<!-- Page -->
	<div class="page animsition">
    <div class="text-center blue-grey-800 padding-top-50 margin-xs-0">
      <div class="font-size-50 margin-bottom-30 blue-grey-800">Welcome Master !</div>
    </div>
		<div class="page-content container-fluid">
    <?php if (in_array('HA03', $_SESSION['hak_akses'])) { ?>
    <div class="panel">
    <div class="panel-body container-fluid">
      <!-- Example Basic Form -->
      <div class="example-wrap">
        <h4 class="example-title" style="text-align:center"><b>Pembaruan Data Kurikulum</b></h4>
        <div class="example">
          <form method="post">
                    <!-- Action -->
                    <div class="form-group">
                    <label class="control-label"><b>Dilakukan 4 Tahun Sekali</b></label>
                      <button type="submit" class="btn btn-block btn-success" name="action"
                      value="kurikulum">
                      <i class="icon fa fa-refresh"></i>
                      <b>Pembaruan data Kurikulum</b>
                    </button>
                    <label class="control-label" style="margin-top:10px"><b>Dilakukan 1 Tahun Sekali</b></label>
                    <button type="submit" class="btn btn-block btn-primary"  name="action" 
                    value="rps">
                      <i class="icon fa fa-refresh"></i>
                      <b>Pembaruan Data RPS</b>
                    </button>
                </div>
                <!-- Action END -->
                
              </form>
            </div>
          </div>
          <!-- End Example Basic Form -->
        </div>
      </div>
<?php } ?>
    </div>
  </div>
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