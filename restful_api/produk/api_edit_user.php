<?php
    require_once('../config/koneksi_db.php');

    if (isset($_POST['id'])) {
        $id                 = $_POST['id'];
        $nama     = $_POST['nama'];
        $umur        = $_POST['umur'];
        $alamat        = $_POST['alamat'];
        $sql = $conn->prepare("UPDATE penyakit SET nama=?, umur=?, alamat=? WHERE id=?");
        $sql->bind_param('sdsd', $nama, $umur, $alamat, $id);
        $sql->execute();
        if ($sql) {
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>