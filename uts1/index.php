<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>no</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "<th>Total Harga</th>";
echo "</tr>";

$data = array(
    array(1, "Pepsodent", 20, 10000),
    array(2, "Sunlight", 15, 11000),
    array(3, "Baygon", 10, 16000),
    array(4, "Dove", 18, 22000),
    array(5, "Rinso", 15, 20000),
    array(6, "Downy", 20, 11500),
    array(7, "Le Mineral", 25, 5000)
);

foreach ($data as $row) {
    echo "<tr>";
    $total_harga = $row[2] * $row[3]; // Hitung total harga
    $row[] = $row[2] * $row[3]; // Tambahkan total harga ke array
    $row[] = $total_harga; // Tambahkan total harga ke array
    foreach ($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
