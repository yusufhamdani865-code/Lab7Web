
<?php
$nama = "Yusuf Hamdani";

$tugas = 90;
$uts = 90;
$uas = 90;

// Menghitung nilai rata-rata
$rataRata = ($tugas + $uts + $uas) / 3;

// Menentukan predikat
if ($rataRata >= 85) {
    $predikat = "A";
} elseif ($rataRata >= 75) {
    $predikat = "B";
} elseif ($rataRata >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1</title>
</head>
<body>

    <h2>Perhitungan Nilai Rata-rata Mahasiswa</h2>

    <?php
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>";
    echo "Nilai UAS: " . $uas . "<br>";
    echo "Nilai Rata-rata: " . number_format($rataRata, 2) . "<br>";
    echo "Predikat: " . $predikat;
    ?>

</body>
</html>

