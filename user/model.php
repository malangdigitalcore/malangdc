<?php
$query_email   = mysql_query("SELECT email FROM email WHERE aktif = 1");
$query_telepon = mysql_query("SELECT telepon, pemilik_kontak FROM telepon WHERE aktif = 1");
$query_alamat  = mysql_query("SELECT alamat FROM alamat WHERE aktif = 1");
$query_artikel = mysql_query("SELECT judul, deskripsi, tanggal, penulis, thumbnail FROM blog ORDER BY kode_blog DESC LIMIT 1");
?>