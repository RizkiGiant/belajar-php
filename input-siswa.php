<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa  : </label>
    <input type="number" name="nis" placeholder="Ex. 12100662" /> <br>

    <label for="nis">Nama Lengkap  : </label>
    <input type="text" name="nama" placeholder="Ex. Rizki Giant" /> <br>
    
    <label for="jk">Jenis kelamin  : </label>
    <input type="radio" name="jk" value="L" /> Laki-Laki 
    <input type="radio" name="jk" value="P" /> Perempuan <br>

    <label for="kelas">Kelas</label>
    <select name="kelas">
        <option>10 RPL 1</option>
        <option>10 RPL 2</option>
        <option>11 RPL 1</option>
        <option>11 RPL 2</option>
        <option>12 RPL 1</option>
        <option>12 RPL 2</option>
</select><br>

<label for="tanggal_lahir">Tanggal Lahir :</label>
<input type="date" name="tanggal_lahir" /><br>

<label for="alamat">Alamat :</label>
<textarea name="alamat" placeholder="Ex. JL. Arief Rahman"></textarea><br>

<label for="nilai">Nilai :</label>
<input type="number" name="nilai" placeholder="Ex. 80.56"><br>

<input type="submit" name="simpan" value="Simpan Data" /> 
<input type="reset" name="reset" value="Reset Input" /> 
</form>

<?php
    if (isset($_POST["simpan"])){
        echo "<hr>";

        //Deklarasi Variable
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $nilai = $_POST["nilai"];

        //Tampilan Data Variable
        echo "
        Hasil inputan Sebagai Berikut: <br>
        Nomor Induk Siswa: $nis <br>
        Nama lengkap: $namalengkap <br>
        Jenis Kelamin: $jeniskelamin <br>
        Kelas: $kelas <br>
        Tanggal Lahir: $tanggal <br>
        Alamat: $alamat <br>
        Nilai: $nilai <br>
        ";
    }