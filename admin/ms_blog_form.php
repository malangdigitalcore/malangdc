<?php
require_once "header.php";

//URL View
$url_view      = "ms_blog_view.php";

//Kode Fakultas
$query         = mysql_query("SELECT MAX(RIGHT(kode_blog, 3)) FROM blog");
$data          = mysql_fetch_array($query);
$kode_blog     = $data[0] + 1;

//GET Area
$mode          = $_GET['mode'];
$idmode        = $_GET['idmode'];

//Edit Mode
if ($mode == 'edit') {
    $query_edit  = mysql_query("SELECT * FROM blog WHERE kode_blog = '$idmode'");
    $data_edit   = mysql_fetch_array($query_edit);
}

//POST Result
$judul         = $_POST['judul'];
$deskripsi     = $_POST['deskripsi'];
$deskripsi1    = $_POST['deskripsi1'];
$deskripsi2    = $_POST['deskripsi2'];
$deskripsi3    = $_POST['deskripsi3'];
$date          = date('Y-m-d');
$penulis       = $_POST['penulis'];
$aktif         = $_POST['aktif'];
$action        = $_POST['action'];

$ukuran_file = $_FILES['gambar']['size'];
$tipe_file   = $_FILES['gambar']['type'];
$tmp_file    = $_FILES['gambar']['tmp_name'];

$nama_file   = $_FILES['gambar']['name'];
$ext         = end(explode(".", $nama_file));
$filename    = pathinfo($nama_file)['filename'];
$temp        = explode(".", $nama_file);
$newfilename = $filename.'-'.$kode_blog.'.'.end($temp);

$path        = "img/".$newfilename;

if ($action == 'simpan'){
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png") { 
        if($ukuran_file <= 1000000) {
            if(move_uploaded_file($tmp_file, $path)) {
                $query = "INSERT INTO blog VALUES (
                '$kode_blog',
                '$judul',
                '$deskripsi',
                '$deskripsi1',
                '$deskripsi2',
                '$deskripsi3',
                '$path',
                '$date',
                '$penulis'
                )";
                $sql = mysql_query($query);
                if($sql) {
                    header("location: ms_blog_view.php");
                } else {
                    ?>
                    <script type="text/javascript">
                        alert('Selesai');
                    </script>
                    <?
                    redirect("ms_blog_view.php");
                }
            } else {
                ?>
                <script type="text/javascript">
                    alert('Terjadi Kesalahan Saat Mengupload Blog!');
                </script>
                <?
                redirect("ms_blog_view.php");
            }
        } else {
            ?>
            <script type="text/javascript">
                alert('Ukuran Logo Tidak Boleh Melebihi 1 MB!');
            </script>
            <?
            redirect("ms_blog_form.php");
        }
    } else {
        ?>
        <script type="text/javascript">
            alert('Ekstensi Tidak Sesuai, Upload Logo dengan Ekstensi JPG atau PNG!');
        </script>
        <?
        redirect("ms_blog_form.php");
    }
} elseif ($action == 'edit'){
    $query_edit   = mysql_query("UPDATE blog SET
    judul       = '$judul',
    deskripsi   = '$deskripsi',
    deskripsi1  = '$deskripsi1',
    deskripsi2  = '$deskripsi2',
    deskripsi3  = '$deskripsi3',
    tanggal     = '$date',
    penulis     = '$penulis'
    WHERE kode_blog = '$idmode'
    ");
    redirect($url_view);
} 
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
            <div class="panel">
                <div class="panel-body container-fluid">
                    <!-- Example Basic Form -->
                    <div class="example-wrap">
                        <h4 class="example-title"><b>Form Blog</b></h4>
                        <div class="example">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label"><b>Kode Blogs</b></label>
                                        <input type="text" class="form-control" readonly
                                        value="<?php echo(($mode=='edit') ? $data_edit['kode_blog'] : $kode_blog)?>"/>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label"><b>Penulis</b></label>
                                        <input type="text" class="form-control" name="penulis" maxlength="30"
                                        value="<?php echo(($mode=='edit') ? $data_edit['penulis'] : '')?>"/>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Judul</b></label>
                                        <input type="text" class="form-control" name="judul" maxlength="30"
                                        value="<?php echo(($mode=='edit') ? $data_edit['judul'] : '')?>"/>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Deskripsi Singkat</b></label>
                                        <textarea class="form-control" rows="4" name="deskripsi"><?php echo(($mode=='edit') ? $data_edit['deksripsi'] : '')?></textarea>
                                        <span>Ditampilkan pada halaman utama (maks. 100 Karakter)</span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Paragraf 1</b></label>
                                        <textarea class="form-control" rows="4" name="deskripsi1" maxlength="100"><?php echo(($mode=='edit') ? $data_edit['deksripsi1'] : '')?></textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Paragraf 2</b></label>
                                        <textarea class="form-control" rows="4" name="deskripsi2" maxlength="100"><?php echo(($mode=='edit') ? $data_edit['deksripsi2'] : '')?></textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Paragraf 3</b></label>
                                        <textarea class="form-control" rows="4" name="deskripsi3" maxlength="100"><?php echo(($mode=='edit') ? $data_edit['deksripsi3'] : '')?></textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><b>Gambar</b></label>
                                        <input type="file" id="image-source" name="gambar" onchange="previewImage();"/>
                                        <span>Ukuran Gambar 1200 x 400, Ekstensi menggunakan PNG atau JPEG</span>
                                        <hr>
                                        <img id="image-preview" alt="image preview"/>
                                    </div>
                                </div>
                                
                                <!-- Action -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success pull-right" name="action"
                                    value="<?php echo (($mode == 'edit') ? 'edit' : 'simpan')?>">
                                    <i class="icon fa fa-save"></i>
                                    <b><?php echo (($mode == 'edit') ? 'Update' : 'Simpan')?></b>
                                </button>
                                <button type="reset" class="btn btn-warning pull-right margin-right-10px">
                                    <i class="icon fa fa-refresh"></i>
                                    <b>Refresh</b>
                                </button>
                                <button type="button" class="btn btn-dark pull-right margin-right-10px"
                                onclick="window.location.href='<?php echo $url_view?>'">
                                <i class="icon fa fa-mail-reply"></i>
                                <b>Kembali</b>
                            </button>
                        </div>
                        <!-- Action END -->
                        
                    </form>
                </div>
            </div>
            <!-- End Example Basic Form -->
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
<script>
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
</body>
</html>