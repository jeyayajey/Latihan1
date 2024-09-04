<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){

        $id_pegawai=$_POST['id_pegawai'];
        $nik=$_POST['nik'];
        $nama_pegawai=$_POST['nama_pegawai'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $no_tlp=$_POST['no_tlp'];
        $id_jabatan=$_POST[id_jabatan];

        if(empty($id_pegawai)){
            echo "<script>alert('ID tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($nik)){
            echo "<script>alert('nik tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($nama_pegawai)){
            echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"INSERT INTO pegawai (nama,nik,alamat,jenis_kelamin,no_tlp,jabatan, password,) value ('".$nama."',
            if($insert){
            echo "<script>alert('sukses melakukan register');location.href='register.php';</script>";
        }
            else {
                echo "<script>alert('gagal melakukan register');location.href='register.php';</script>";
            }
        }
    }
?