<?php
$host='localhost';
$user='root';
$pswd='';
$db='SIPM';
$con= new mysqli($host,$user,$pswd,$db);

if ($con->connect_error) {
    die("KONEKSI GAGAL: ".$con->connect_error);
}
?>