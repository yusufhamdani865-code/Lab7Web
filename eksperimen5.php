
<?php
$nama = "";
$nim = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");

    if ($nama === "" || $nim === "") {
        $pesan = "Semua data wajib diisi.";
    } else {
        $pesan = "Data berhasil dikirim ke server.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 5 - Tombol Reset</title>
</head>
<body>

    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php if ($pesan !== "") : ?>
        <p>
            <?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?>
        </p>
    <?php endif; ?>

</body>
</html>
