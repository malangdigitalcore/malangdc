<!-- Core  -->
<script src="global/vendor/jquery/jquery.js"></script>
<script src="global/vendor/bootstrap/bootstrap.js"></script>
<script src="global/vendor/animsition/animsition.js"></script>
<script src="global/vendor/asscroll/jquery-asScroll.js"></script>
<script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
<script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="global/vendor/popper-js/umd/popper.min.js"></script>
<!-- Plugins -->
<script src="global/vendor/switchery/switchery.min.js"></script>
<script src="global/vendor/intro-js/intro.js"></script>
<script src="global/vendor/screenfull/screenfull.js"></script>
<script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="global/vendor/footable/footable.min.js"></script>
<script src="global/vendor/select2/select2.full.min.js"></script>
<script src="global/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="global/vendor/multi-select/jquery.multi-select.js"></script>
<script src="global/vendor/datatables/jquery.dataTables.js"></script>
<script src="global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
<script src="global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
<script src="global/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src="global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
<script src="global/vendor/editable-table/mindmup-editabletable.js"></script>
<script src="global/vendor/editable-table/numeric-input-example.js"></script>
<script src="global/vendor/asrange/jquery-asRange.min.js"></script>
<script src="global/vendor/bootbox/bootbox.js"></script>
<script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
<script src="global/vendor/chartist-js/chartist.min.js"></script>
<script src="global/vendor/gmaps/gmaps.js"></script>
<script src="global/vendor/matchheight/jquery.matchHeight-min.js"></script>
<script src="global/vendor/peity/jquery.peity.min.js"></script>
<!-- Scripts -->
<script src="global/js/core.js"></script>
<script src="base/assets/js/site.js"></script>
<script src="base/assets/js/sections/menu.js"></script>
<script src="base/assets/js/sections/menubar.js"></script>
<script src="base/assets/js/sections/gridmenu.js"></script>
<script src="base/assets/js/sections/sidebar.js"></script>
<script src="global/js/configs/config-colors.js"></script>
<script src="base/assets/js/configs/config-tour.js"></script>
<script>Config.set('assets', 'base/assets');</script>
<script src="global/js/components/asscrollable.js"></script>
<script src="global/js/components/animsition.js"></script>
<script src="global/js/components/slidepanel.js"></script>
<script src="global/js/components/switchery.js"></script>

<script src="global/js/components/select2.js"></script>
<script src="global/js/components/bootstrap-select.js"></script>
<script src="global/js/components/multi-select.js"></script>
<script src="global/js/components/datatables.js"></script>
<script src="global/js/components/editable-table.js"></script>
<script src="global/js/components/peity.js"></script>
<script src="global/js/plugins/selectable.js"></script>
<script src="global/js/components/selectable.js"></script>
<script src="global/js/components/table.js"></script>

<script src="base/assets/examples/js/charts/peity.js"></script>
<script src="base/assets/examples/js/tables/datatable.js"></script>
<script src="base/assets/examples/js/tables/editable.js"></script>
<script src="base/assets/examples/js/uikit/icon.js"></script>
<script src="global/js/components/gmaps.js"></script>
<script src="global/js/components/matchheight.js"></script>
<script src="base/assets/examples/js/dashboard/v2.js"></script>
<script src="global/js/components/jquery-placeholder.js"></script>
<script src="base/assets/examples/js/tables2/footable.js"></script>
<script>
  //event OnChange
  $("#prodi").change(function() {
    $("#kode_visi").load("ms_visi_form_ambilkode.php?choice=" + $("#prodi").val());                             //master visi
    $("#kode_misi").load("ms_misi_form_ambilkode.php?choice=" + $("#prodi").val());                             //master misi
    $("#kodevisi").load("ms_misi_form_ambilkodevisi.php?choice=" + $("#prodi").val());                          //master misi
    $("#visi").load("ms_misi_form_ambilvisi.php?choice=" + $("#prodi").val());                                  //master misi
    $("#kode_tujuan").load("ms_tujuan_form_ambilkode.php?choice=" + $("#prodi").val());                         //master tujuan
    $("#kode_sasaran").load("ms_sasaran_form_ambilkode.php?choice=" + $("#prodi").val());                       //master sasaran
    $("#kode_lingkup").load("ms_lingkup_form_ambilkode.php?choice=" + $("#prodi").val());                      //master lingkup
    $("#kode_pl").load("ms_profillulusan_form_ambilkode.php?choice=" + $("#prodi").val());                      //master profil lulusan
    $("#misi").load("ms_profillulusan_form_ambilmisi.php?choice=" + $("#prodi").val());                         //master profil lulusan
    $("#kode_kompetensi").load("ms_cpl_form_ambilkode.php?choice=" + $("#prodi").val());                        //master capaian pembelajaran
    $("#lingkup").load("ms_cpl_form_ambillingkup.php?choice=" + $("#prodi").val());                             //master capaian pembelajaran
    $("#profil_lulusan").load("ms_cpl_form_ambilprofillulusan.php?choice=" + $("#prodi").val());                //master capaian pembelajaran
    $("#kode_cpj").load("ms_cpj_form_ambilkode.php?choice=" + $("#prodi").val());                               //master capaian jenjang
    $("#kode_cpr").load("ms_cpr_form_ambilkode.php?choice=" + $("#prodi").val());                               //master capaian program
    $("#kode_bk").load("ms_bidangkajian_form_ambilkode.php?choice=" + $("#prodi").val());                       //master bidang kajian
    $("#kode_dbk").load("ms_bidangkajian_form_ambilkodedetail.php?choice=" + $("#prodi").val());                //master bidang kajian
    $("#bidang_kajian").load("ms_matakuliah_form_ambilbidangkajian.php?choice=" + $("#prodi").val());
  });
  $("#tipe").change(function() {
    $("#noinduk").load("ms_user_form_ambiltipe.php?choice=" + $("#tipe").val());                              //master user
  });
  $("#bidang_kajian").change(function() {
    $("#capaian_pembelajaran").load("ms_matakuliah_form_ambilcpl.php?choice=" + $("#bidang_kajian").val());   //master matakuliah
    $("#profil_lulusan2").load("ms_matakuliah_form_ambilprofillulusan.php?choice=" + $("#bidang_kajian").val());
  });
  $("#kemampuan_akhir").change(function() {
    $("#materi_pembelajaran").load("ts_rps_form_ambilmateri.php?choice=" + $("#kemampuan_akhir").val());
  });
  
  function kali() {
    var txtFirstNumberValue = document.getElementById('jumlah_sks').value;
    var result = parseInt(txtFirstNumberValue) * 50;
    if (!isNaN(result)) {
      document.getElementById('waktu').value = result;
    }
  }
  
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    
    document.body.innerHTML = printContents;
    
    window.print();
    
    document.body.innerHTML = originalContents;
  }
  
  //ID mahasiswa by prodi dan tahun
  $("#prodi").change(function(){
    $("#pr").val($("#prodi").val());
    nim();
  });
  $("#angkatan").change(function(){
    $("#th").val($("#angkatan").val());
    nim();
  });
  function nim(){
    if($("#pr").val() != 0 && $("#th").val() != 0){
      var prodi = $("#pr").val();
      var angkatan = $("#th").val();
      var gabung = prodi+angkatan;
      $.ajax({
        url:'ms_mahasiswa_form_ambilkode.php',
        data: 'var='+gabung,
        success:function(text){
          $("#idmhs").val(gabung+text);
        }
      })
    }
  }
  
  //Kode MK
  $("#program").change(function(){
    $("#prog").val($("#program").val());
    kodemklama();
  });
  $("#kategori").change(function(){
    $("#kat").val($("#kategori").val());
    kodemklama();
  });
  $("#tahunmk").change(function(){
    $("#thmk").val($("#tahunmk").val());
    kodemklama();
  });
  $("#semestermk").change(function(){
    $("#smmk").val($("#semestermk").val());
    kodemklama();
  });
  function kodemklama(){
    if($("#prog").val() != 0 && $("#kat").val() != 0 && $("#thmk").val() != 0 && $("#smmk").val() != 0){
      var program            = $("#prog").val();
      var kategori           = $("#kat").val();
      var tahunmatakuliah    = $("#thmk").val();
      var semestermatakuliah = $("#smmk").val();
      var gabung = program+kategori+tahunmatakuliah+semestermatakuliah;
      $.ajax({
        url:'ms_matakuliah_form_ambilkode.php',
        data: 'var='+gabung,
        success:function(text){
          $("#kodemk").val(gabung+text);
        }
      })
    }
  }
</script>

<script>
  var date = new Date();
  var year = date.getFullYear();
  $('#year').text(year);
</script>
<script>
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

<script>
  (function(document, window, $){
    'use strict';
    
    var Site = window.Site;
    $(document).ready(function(){
      Site.run();
    });
  })(document, window, jQuery);
</script>

