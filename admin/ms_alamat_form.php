<?php
require_once "header.php";

//URL View
$url_view      = "ms_alamat_view.php";

//Kode Fakultas
$query         = mysql_query("SELECT MAX(RIGHT(kode_alamat, 2)) FROM alamat");
$data          = mysql_fetch_array($query);
$kode_alamat   = $data[0] + 1;

//GET Area
$mode          = $_GET['mode'];
$idmode        = $_GET['idmode'];

//Edit Mode
if ($mode == 'edit') {
    $query_edit  = mysql_query("SELECT * FROM alamat WHERE kode_alamat = '$idmode'");
    $data_edit   = mysql_fetch_array($query_edit);
}

//POST Result
$alamat        = $_POST['alamat'];
$aktif         = $_POST['aktif'];
$action        = $_POST['action'];
if ($action == 'simpan'){
    $query_simpan = mysql_query("INSERT INTO alamat VALUES (
    '$kode_alamat',
    '$alamat',
    '$aktif'
    )");
    redirect($url_view);
} elseif ($action == 'edit'){
    $query_edit   = mysql_query("UPDATE alamat SET
    alamat = '$alamat',
    aktif = '$aktif'
    WHERE kode_alamat = '$idmode'
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
                        <h4 class="example-title"><b>Form Alamat</b></h4>
                        <div class="example">
                            <form method="post">
                                
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label"><b>Kode Alamat</b></label>
                                        <input type="text" class="form-control" readonly
                                        value="<?php echo(($mode=='edit') ? $data_edit['kode_alamat'] : $kode_alamat)?>"/>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label"><b>Status Data</b></label>
                                        <select data-plugin="selectpicker" name="aktif" required>
                                            <option value="" disabled selected>- Pilih Status Data -</option>
                                            <?php
                                            $status[1] = 'Aktif';
                                            $status[2] = 'Tidak Aktif';
                                            for ($i=1; $i<=2; $i++){
                                                if ($mode == 'edit' AND $i==$data_edit['aktif']){
                                                    ?>
                                                    <option value="<?php echo $i?>" selected><?php echo $status[$i]?></option>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <option value="<?php echo $i?>"><?php echo $status[$i]?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="control-label"><b>Alamat</b></label>
                                    <textarea class="form-control" rows="3" name="alamat"><?php echo(($mode=='edit') ? $data_edit['alamat'] : '')?></textarea>
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
</body>
</html>