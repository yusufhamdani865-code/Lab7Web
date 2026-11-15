
<?php
    // Function untuk menghitung diskon
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    // Menghitung harga setelah diskon
    $hargaAkhir = hitungDiskon(150000, 10);

    // Function tambahan untuk menghitung luas persegi panjang
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // Menghitung luas
    $luas = hitungLuas(8, 5);

    // Menampilkan hasil
    echo "<h2>Program Function PHP</h2>";

    echo "<h3>Perhitungan Diskon</h3>";
    echo "Harga awal: Rp150.000<br>";
    echo "Diskon: 10%<br>";
    echo "Harga setelah diskon: Rp" .
         number_format($hargaAkhir, 0, ",", ".") . "<br>";

    echo "<h3>Perhitungan Luas Persegi Panjang</h3>";
    echo "Panjang: 8<br>";
    echo "Lebar: 5<br>";
    echo "Luas: " . $luas;
?>
