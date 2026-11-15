
<?php
    // Membuat array daftar mahasiswa
    $mahasiswa = [
        "Yusuf Hamdani",
        "Andi",
        "Budi",
        "Citra",
        "Doni",
        "Siti",
        "Rina"
    ];

    // Menampilkan daftar mahasiswa
    echo "<h3>Daftar Mahasiswa</h3>";
    echo "<ol>";

    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }

    echo "</ol>";
?>

