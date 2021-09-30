<?php

class Anak extends Database
{

    public function create($nama, $status, $nik, $agama, $tanggalLahir, $tanggalMasuk, $jenisKelamin, $idPengurus)
    {
        mysqli_query($this->koneksi, "INSERT INTO anak_panti
              VALUES (null, '$nama', '$status', '$nik', '$agama', '$tanggalLahir', $tanggalMasuk, '$jenisKelamin', '$idPengurus')");
    }

    public function index()
    {
        return mysqli_query($this->koneksi, "SELECT anak_panti.*, pengurus.nama as nama_pengurus FROM anak_panti JOIN pengurus ON  pengurus.id = anak_panti.id_pengurus");
    }

    public function destroy($id)
    {
        return mysqli_query($this->koneksi, "DELETE FROM anak_panti WHERE id=$id");
    }

}
