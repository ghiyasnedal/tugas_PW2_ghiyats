<?php
require_once "class_mahasiswa.php";

// Daftar mahasiswa
$mahasiswaList = [
    new Mahasiswa("02011", "Faiz Fikri", 2012, "TI", 3.8),
    new Mahasiswa("02012", "Alissa Khairunnisa", 2012, "TI", 3.9),
    new Mahasiswa("01011", "Rosalie Naurah", 2010, "SI", 3.46),
    new Mahasiswa("01012", "Defghi Muhammad", 2010, "SI", 3.2)
];

echo "<h3>Daftar Mahasiswa</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Thn Angkatan</th>
        <th>IPK</th>
        <th>Predikat</th>
      </tr>";

$no = 1;
foreach ($mahasiswaList as $mhs) {
    echo "<tr>
            <td>$no</td>
            <td>{$mhs->nim}</td>
            <td>{$mhs->nama}</td>
            <td>{$mhs->prodi}</td>
            <td>{$mhs->thn_angkatan}</td>
            <td>{$mhs->ipk}</td>
            <td>{$mhs->predikat_ipk()}</td>
          </tr>";
    $no++;
}

echo "</table>";
?>
