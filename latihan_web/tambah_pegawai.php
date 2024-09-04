<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>tambah pegawai</title>
    </head>

<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        nama pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender :
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat:
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Kelas :
        <select name="id_pegawai" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jabatan = mysqli_query($conn, "select * from jabatan");
            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
            }
            ?>
        </select>
        Username:
        <input type="text" name="username" value="" class="form-control">
        Password
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn-btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>