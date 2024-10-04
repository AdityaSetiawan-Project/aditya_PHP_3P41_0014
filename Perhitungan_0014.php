<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member = $_POST['member'];
    $total_pembelian_0014 = $_POST['total'];

    if ($member == 'yes') {
        // Member
        if ($total_pembelian_0014 >= 500000) {
            $diskon_0014 = 0.10;  // Diskon 10%
        } elseif ($total_pembelian_0014 >= 300000) {
            $diskon_0014 = 0.05;  // Diskon 5%
        } else {
            $diskon_0014 = 0.10;  // Diskon member saja (tanpa syarat)
        }
    } else {
        // Non-member
        if ($total_pembelian_0014 >= 500000) {
            $diskon_0014 = 0.10;  // Diskon 10%
        } else {
            $diskon_0014 = 0.0;   // Tidak ada diskon
        }
    }

    $potongan_harga_0014 = $total_pembelian_0014 * $diskon_0014;
    $total_bayar_0014 = $total_pembelian_0014 - $potongan_harga_0014;

    echo "<h1>Hasil Perhitungan</h1>";
    echo "Total Pembelian: Rp " . number_format($total_pembelian_0014, 0, ',', '.') . "<br>";
    echo "Diskon: " . ($diskon_0014 * 100) . "%<br>";
    echo "Potongan Harga: Rp " . number_format($potongan_harga_0014, 0, ',', '.') . "<br>";
    echo "Total yang Harus Dibayar: Rp " . number_format($total_bayar_0014, 0, ',', '.');
}
?>