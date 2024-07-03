<?php
// Sertakan file konfigurasi
include 'config.php';

// Query untuk mendapatkan data dari tabel kamar
$sql = "SELECT id_kamar, Nomor_kamar, Type_kamar, Harga_permalam FROM kamar";
$result = $conn->query($sql);
    
// Mengecek apakah ada hasil
if ($result->num_rows > 0) {
    // Menampilkan data dalam bentuk tabel
    echo "<table border='1'>
            <tr>
                <th>ID Kamar</th>
                <th>Nomor Kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga per Malam</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_kamar"] . "</td>
                <td>" . $row["Nomor_kamar"] . "</td>
                <td>" . $row["Type_kamar"] . "</td>
                <td>" . $row["Harga_permalam"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>
