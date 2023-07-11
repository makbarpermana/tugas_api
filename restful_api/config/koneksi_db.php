<?php
    define('HOST','localhost');
    define('USER', 'root');
    define('DB', 'tht');
    define('PASS','');
    $conn = new mysqli(HOST,USER,PASS,DB) OR die('Koneksi eror untuk database');
