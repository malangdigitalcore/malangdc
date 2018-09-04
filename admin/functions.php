<?php
ini_set("display_errors", "0");

function opendb(){
	global $host, $user, $pass, $dbname, $dbconnect;
	$host = "sql203.epizy.com";
	$user = "epiz_22655767";
	$pass = "UsqBvajzY2";
	$dbname = "epiz_22655767_mdc";
	$dbconnect = mysql_connect($host, $user, $pass) or die("Gagal membuka Database");
	$dbselect = mysql_select_db($dbname);
}

function redirect($url){
	echo "<script language='javascript'>window.location.href='".$url."'</script>";
}

function login($nama_pengguna, $kata_sandi) {
	$url_failed   = "index.php";
	$url_success  = "home.php";
	$query_login  = mysql_query("SELECT username FROM user WHERE username = '$nama_pengguna' AND kata_sandi = '".($kata_sandi)."'");
	if (mysql_num_rows($query_login) > 0) {
		$data_login = mysql_fetch_array($query_login);
		session_start();
		$_SESSION['username'] = $data_login['username'];
		redirect($url_success);
	}else {
		unset($_SESSION['username']);
		session_destroy();
		echo "<script type='text/javascript'>alert('Login Gagal, Pastikan Nama Pengguna dan Kata Sandi Benar Atau Status Akses Anda Aktif!');</script>";
		redirect ($url_failed);
	}
}

function logout() {
	$url = "../index.php";
	unset($_SESSION['username']);
	session_destroy();
	redirect($url);
}

function SessionChecker($param1) {
	if ($param1 == '') {
		$url = "index.php";
		echo "<script type='text/javascript'>alert('Login Terlebih Dulu!');</script>";
		redirect($url);
	}
}

function ubahbulan($bulan){
	if ($bulan == 7) {
		echo "July";
	}
}

?>