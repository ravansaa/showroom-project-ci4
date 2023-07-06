<?php
// Mengambil data dari formulir
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];

// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "showroom_gas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menyimpan data ke dalam tabel showroom_gas
$sql = "INSERT INTO showroom_gas (nama, nomor, alamat)
        VALUES ('$nama', '$nomor', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
            <img src="assets/icons/mocar.png" alt="Checkmark Icon" style="width: 100px; margin-bottom: 20px;">
            <p style="text-align: center; font-size: 18px;">Pemesanan berhasil dilakukan, agent kami akan segera menghubungi Anda.</p>
            <a href="index.php" style="text-align: center;">Kembali ke Halaman Home</a>
          </div>';
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}


// Menutup koneksi ke database
$conn->close();
?>
