
<?php
// Function untuk mengubah angka menjadi format Rupiah
function formatRupiah($harga) {
    return "Rp" . number_format($harga, 0, ",", ".");
}

// Contoh penggunaan function
$harga1 = 150000;
$harga2 = 2500000;
$harga3 = 75000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Format Harga Rupiah</title>
</head>
<body>

    <h2>Format Harga Rupiah</h2>

    <p>Harga 1: <?php echo formatRupiah($harga1); ?></p>
    <p>Harga 2: <?php echo formatRupiah($harga2); ?></p>
    <p>Harga 3: <?php echo formatRupiah($harga3); ?></p>

</body>
</html>
