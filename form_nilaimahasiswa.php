<?php
require_once "class_nilaimahasiswa.php";

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $matakuliah = $_POST["matakuliah"];
    $nilai = $_POST["nilai"];

    // Buat objek NilaiMahasiswa
    $mahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h2>Form Nilai Ujian</h2>
    <form method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="matakuliah">Pilih Mata Kuliah:</label>
        <select id="matakuliah" name="matakuliah" required>
            <option value="Data Warehouse">Data Warehouse</option>
            <option value="Big Data">Big Data</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
        </select><br><br>

        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <?php
    // Tampilkan hasil jika form telah dikirim
    if (isset($mahasiswa)) {
        echo "<hr>";
        echo "<h3>Hasil Nilai Mahasiswa</h3>";
        echo "NIM: " . $mahasiswa->nim . "<br>";
        echo "Nama Mata Kuliah: " . $mahasiswa->matakuliah . "<br>";
        echo "Nilai: " . $mahasiswa->nilai . "<br>";
        echo "Hasil Ujian: " . $mahasiswa->grade() . "<br>";
        echo "Grade: " . $mahasiswa->hasil() . "<br>";
    }
    ?>
</body>
</html>
