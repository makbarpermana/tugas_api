<?php
    require_once('../config/koneksi_db.php');

    if (isset($_POST['kode_penyakit'])) {
        $kode_penyakit                 = $_POST['kode_penyakit'];
        $nama_penyakit     = $_POST['nama_penyakit'];
        $penjelasan        = $_POST['penjelasan'];
        $penanganan        = $_POST['penanganan'];
        $sql = $conn->prepare("UPDATE penyakit SET nama_penyakit=?, penjelasan=?, penanganan=? WHERE kode_penyakit=?");
        $sql->bind_param('sssd', $nama_penyakit, $penjelasan, $penanganan, $kode_penyakit);
        $sql->execute();
        if ($sql) {
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
    } else {
        echo "gagal";
    }
?>