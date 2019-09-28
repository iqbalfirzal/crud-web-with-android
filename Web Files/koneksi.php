<?php
//Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','database_user');
 define('PASS','database_password');
 define('DB','database_name');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>