<?php
// Array berisi data pembelian
$items = array(
    array("Nama Produk" => "pepsodent", "Stok" => 20, "Harga" => 10000),
    array("Nama Produk" => "sunlight", "Stok" => 15, "Harga" => 11000),
    array("Nama Produk" => "baygon", "Stok" => 10, "Harga" => 16000),
    array("Nama Produk" => "dove", "Stok" => 18, "Harga" => 22000),
    array("Nama Produk" => "rinso", "Stok" => 15, "Harga" => 20000),
    array("Nama Produk" => "downy", "Stok" => 20, "Harga" => 11500),
    array("Nama Produk" => "le mineral", "Stok" => 25, "Harga" => 5000),
    
);

// Tampilkan isi array dalam tabel
echo '<table border="1">';
echo '<tr>';
echo '<th>Nama Produk</th>';
echo '<th>Stok</th>';
echo '<th>Harga</th>';
echo '</tr>';

// Urutkan array berdasarkan harga (ascending)
usort($items, function ($a, $b) {
    return $a["Harga"] - $b["Harga"];
});

foreach ($items as $item) {
    echo '<tr>';
    echo '<td>' . $item["Nama Produk"] . '</td>';
    echo '<td>' . $item["Stok"] . '</td>';
    echo '<td>Rp ' . number_format($item["Harga"], 0, ',', '.') . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
