<?php
/**
 * Namafile : config.php 
 * ----------------------------*/
$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'sisteminformasi';
// melakukan koneksi ke database
$koneksi = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);
// cek koneksi yang kita lakukan berhasil atau tidak

