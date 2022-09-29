

<?php
include('./input-config.php');
if ($_SESSION["login"] != TRUE) {
    header('location:login.php');
}

echo "<a href='input-data-diri-tambah.php'>Tambah data</a>";
echo "<hr>";
//Menampilkan data diri dari database
$no = 1;
$tabledata = "";
$data = mysqli_query($mysqli, " SELECT * FROM datadiri ");
while ($row = mysqli_fetch_array($data)) {
    $tabledata .= "
        <tr>
            <td>" . $row["nis"] . "</td>
            <td>" . $row["namalengkap"] . "</td>
            <td>" . $row["tanggal_lahir"] . "</td>
            <td>" . $row["nilai"] . "</td>
            <td>
                <a href= 'input-data-diri-edit.php?nis=" . $row["nis"] . "'>Edit<a>&nbsp;-&nbsp;
                <a href= 'input-data-diri-hapus.php?nis=" . $row["nis"] . "' onclick='return confirm(\"Yakin Hapus?\");'>Hapus</a>
            </td>
        </tr>
        ";
    $no++;
}
echo "
    <table cellpadding=5 border=1 cellspacing=0>
        <tr>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        $tabledata
    </table>
    ";
