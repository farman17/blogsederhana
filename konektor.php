<?php

// konfigurasi database
$host = "dbsosmedia.cjorhe5jzkni.us-east-2.rds.amazonaws.com";
$user = "admin";
$pass = "farman17";
$db = "praktikumblog";

// melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
	echo "Gagal konek: " . die(mysqli_error($koneksi));
}
