<?php
ini_set("display_errors", 0);

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
?>