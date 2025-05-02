<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;

    // Konstruktor untuk menginisialisasi variabel
    public function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    // Fungsi untuk menentukan grade berdasarkan nilai
    public function grade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) return "A";
        elseif ($this->nilai >= 70 && $this->nilai < 85) return "B";
        elseif ($this->nilai >= 56 && $this->nilai < 70) return "C";
        elseif ($this->nilai >= 36 && $this->nilai < 56) return "D";
        else return "E";
    }

    // Fungsi untuk menentukan status kelulusan
    public function hasil() {
        return ($this->nilai >= 56) ? "LULUS" : "TIDAK LULUS";
    }
}
?>
