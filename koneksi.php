<?php

// ===============================================
// 1. ONLINE CONFIGURATION (INFINITYFREE)
//    UBAH INI SETELAH UPLOAD KE INFINITYFREE
// ===============================================

$host = 'sql104.infinityfree.com'; // Contoh: 'sql308.infinityfree.com'
$user = '	if0_40250861A';           // Contoh: 'if0_40250861_inventaris'
$password = '5ZmVE1ejCNWI';       // Password yang Anda buat
$database = 'if0_40250861_inventaris';           // Contoh: 'if0_40250861_inventaris'

// ===============================================
// 2. LOCAL CONFIGURATION (XAMPP/LOCALHOST)
//    GUNAKAN INI HANYA JIKA ANDA MENGEMBANGKAN LOKAL
// ===============================================

// Jika kode dijalankan di localhost, ganti kredensial ke XAMPP:
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $host = 'localhost'; 
    $user = 'root';
    $password = ''; // Kosongkan jika XAMPP default
    $database = 'input data'; // Ubah ke nama DB di XAMPP Anda
}

// ===============================================
// 3. DATABASE CONNECTION & ERROR HANDLING
// ===============================================

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    // Jika koneksi gagal, hentikan skrip dan tampilkan pesan error
    die("Koneksi gagal: " . $conn->connect_error);
}

// ===============================================
// 4. SET HEADER (PENTING UNTUK API/CORS DENGAN GITHUB PAGES)
// ===============================================

// Mengizinkan akses dari domain manapun (GitHub Pages atau local)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// LANJUTKAN DENGAN LOGIKA CRUD ANDA DI SINI...
// Contoh:
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    ... kode untuk menyimpan data ...
// }
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//    ... kode untuk mengambil data ...
// }

?>