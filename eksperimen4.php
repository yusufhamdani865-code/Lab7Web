
<?php
$nim = "";
$pesan = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");

    // Memeriksa apakah NIM hanya berisi angka
    if (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka.";
        $status = "error";
    }
    // Memeriksa panjang NIM
    elseif (strlen($nim) !== 9) {
        $pesan = "NIM harus terdiri dari 9 angka.";
        $status = "error";
    }
    else {
        $pesan = "NIM valid dan berhasil diperiksa.";
        $status = "success";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST" action="">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim" required>
        <button type="submit">Periksa NIM</button>
        <button type="reset">Reset</button>
    </form>

    <?php if ($pesan !== "") : ?>
        <p><?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?></p>
    <?php endif; ?>

</body>
</html>
