<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['nama_penyakit']) && isset($_POST['penjelasan']) && isset($_POST['penanganan'])) {
        $nama_penyakit      = $_POST['nama_penyakit'];
        $penjelasan   = $_POST['penjelasan'];
        $penanganan            = $_POST['penanganan'];
        $sql = $conn->prepare("INSERT INTO penyakit (nama_penyakit, penjelasan, penanganan) VALUES (?, ?, ?)");
        $sql->bind_param('sss', $nama_penyakit, $penjelasan, $penanganan);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
        echo "GAGAL";
        }
    }
?>