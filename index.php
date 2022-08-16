<?php // file: oopmvc/index.php

//memanggil model
require_once "model/anggota_model.php";

//mendapatkan data anggota
$anggota = getAllAnggota();

//memanggil list.php untuk menampilkan anggota
require 'view/anggota/list.php';
?>