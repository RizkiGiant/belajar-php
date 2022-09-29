<h1>Tambah Data Guys</h1>
<form action="input-data-diri.php" method="POST">
    <label for="nis">Nomor Induk Siswa : </label> <br>
    <input type="number" name="nis" placeholder="Ex. 12100662" /> <br>

    <label for="nama">Nama Lengkap : </label> <br>
    <input type="text" name="nama" placeholder="Ex. Rizki Giant" /> <br>

    <label for="tanggal_lahir">Tanggal Lahir :</label> <br>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="nilai">Nilai :</label> <br>
    <input type="number" name="nilai" placeholder="Ex. 80.56" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="input-data-diri.php">Kembali</a>
</form>

<?php
if (isset($_POST["simpan"])) {
    $nis    = $_POST["nis"];
    $nama    = $_POST["nama"];
    $tanggal_lahir    = $_POST["tanggal_lahir"];
    $nilai    = $_POST["nilai"];

    //CREATE - menambahkan data ke database
    $query = "
        INSERT INTO datadiri VALUES
        ('$nis','$nama','$tanggal_lahir','$nilai');
    ";

    include('./input-config.php');
    $insert = mysqli_query($mysqli, $query);

    if ($insert) {
        echo "
    <script>
    alert('Data berhasil ditambahkan');
    window.location='input-datadiri.php';
    </script>
";
    }
}

?>