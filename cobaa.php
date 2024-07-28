<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>

<?php
// Koneksi ke database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "mukidi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Paimin tidak terhubung: " . mysqli_connect_error());
} else {
    // Query untuk mengambil nama dari tabel paimin berdasarkan ID tertentu (misal ID=1)
    $sql = "SELECT nama FROM paimin WHERE ID=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data dari setiap baris
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h1>Selamat Datang, " . $row["nama"] . "!</h1>";
        }
    } else {
        echo "Paimin tidak ada";
    }
}

mysqli_close($conn);
?>

</body>
</html>
