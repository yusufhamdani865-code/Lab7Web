
<?php
// Data nama mahasiswa
$mahasiswa = [
    "Yusuf Hamdani",
    "Andi Saputra",
    "Budi Santoso",
    "Citra Amelia",
    "Doni Pratama"
];

// Menyiapkan variabel pencarian
$kata = "";
$hasil = [];

if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);

    // Mencari nama yang sesuai
    foreach ($mahasiswa as $nama) {
        if (stripos($nama, $kata) !== false) {
            $hasil[] = $nama;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET" action="">
        <label>Masukkan nama mahasiswa:</label><br>
        <input type="text" name="kata"
               value="<?php echo htmlspecialchars($kata, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="submit">Cari</button>
    </form>

    <?php if (isset($_GET["kata"])) : ?>

        <h3>Hasil Pencarian:</h3>

        <?php if ($kata === "") : ?>
            <p>Masukkan nama yang ingin dicari.</p>

        <?php elseif (count($hasil) > 0) : ?>
            <ul>
                <?php foreach ($hasil as $nama) : ?>
                    <li><?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>

        <?php else : ?>
            <p>Nama mahasiswa tidak ditemukan.</p>
        <?php endif; ?>

    <?php endif; ?>

</body>
</html>
