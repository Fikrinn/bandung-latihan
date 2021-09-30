<?php
include '../database.php';
$anak = new Anak();

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $aksi = $_POST['aksi'];
    $nama = $_POST['nama'];
    foreach($_POST['status'] as $statuses){
        $status .= "$statuses " ;
    }
    $nik = $_POST['nik'];
    $agama = $_POST['agama'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $tanggalMasuk = date('Y');
    $idPengurus = $_POST['id_pengurus'];

    // echo "Nama :$nama Status :$status NIK$nik";
// 
    if($aksi == "create"){
        $anak->create($nama, $status, $nik, $agama, $tanggalLahir, $tanggalMasuk, $jenisKelamin, $idPengurus)
        header('location:index.php');
    }else if($aksi == "destroy"){
        echo $anak->destroy($id);
        header('location:index.php');
    }
}
