
<?php
    $nama = "Yusuf Hamdani";
    $tugas = 85;
    $uts = 80;
    $uas = 90;

    // Menghitung nilai akhir
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    // Menentukan predikat
    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    // Menampilkan hasil
    echo "<h2>Hasil Nilai Mahasiswa</h2>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>";
    echo "Nilai UAS: " . $uas . "<br>";
    echo "Nilai Akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;
?>

