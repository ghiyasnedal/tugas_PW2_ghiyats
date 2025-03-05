<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // Menghitung total nilai dengan bobot (jika ada)
    $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.4) + ($nilai_tugas * 0.3);

    // Menentukan status kelulusan
    $status = ($total_nilai >= 55) ? "Lulus" : "Tidak Lulus";

    // Menentukan grade berdasarkan total nilai
    if ($total_nilai >= 85) {
        $grade = "A";
    } elseif ($total_nilai >= 70) {
        $grade = "B";
    } elseif ($total_nilai >= 56) {
        $grade = "C";
    } elseif ($total_nilai >= 36) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Menampilkan hasil
    echo "<h2>Hasil Penilaian</h2>";
    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $nilai_uts <br>";
    echo "Nilai UAS: $nilai_uas <br>";
    echo "Nilai Tugas: $nilai_tugas <br>";
    echo "Total Nilai: $total_nilai <br>";
    echo "Status: $status <br>";
    echo "Grade: $grade <br>";
} else {
    echo "Akses ditolak!";
}
?>
