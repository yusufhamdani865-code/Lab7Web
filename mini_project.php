
<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari form
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi data
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (
        !ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada kesalahan, simpan data
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required>
        <br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi" required>
        <br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" min="1" max="14" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php if (!empty($error)) : ?>
        <h3>Terjadi Kesalahan:</h3>
        <ul>
            <?php foreach ($error as $pesan) : ?>
                <li><?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($data !== null) : ?>
        <h3>Data Mahasiswa Berhasil Dikirim</h3>

        <p>Nama: <?php echo htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8"); ?></p>
        <p>NIM: <?php echo htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8"); ?></p>
        <p>Program Studi: <?php echo htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8"); ?></p>
        <p>Semester: <?php echo $data["semester"]; ?></p>
        <p>Email: <?php echo htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8"); ?></p>
    <?php endif; ?>

</body>
</html>
