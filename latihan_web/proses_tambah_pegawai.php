<?php
if($_POST){
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['gender'];
    $no_tlp= $_POST['no_tlp'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_siswa,tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>