<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['nama']) && isset($_POST['umur']) && isset($_POST['alamat'])) {
        $nama      = $_POST['nama'];
        $umur   = $_POST['umur'];
        $alamat            = $_POST['alamat'];
        $sql = $conn->prepare("INSERT INTO penyakit (nama, umur, alamat) VALUES (?, ?, ?)");
        $sql->bind_param('sds', $nama, $umur, $alamat);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
        echo "GAGAL";
        }
    }
