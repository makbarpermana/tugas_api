<?php
    require_once('../config/koneksi_db.php');


    if (isset($_GET['kode_penyakit'])) {
        $kode_penyakit  = $_GET['kode_penyakit'];
        $sql = $conn->prepare("DELETE FROM penyakit WHERE kode_penyakit=?");
        $sql->bind_param('i', $kode_penyakit);
        $sql->execute();
        if ($sql) {
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
    }else{
            echo "gagal";
    }
?>