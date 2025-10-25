<?php
// Pengaturan Header CORS (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json");

// --- 🚨 KOREKSI KONFIGURASI DATABASE 🚨 ---
// GANTI SEMUA NILAI DI BAWAH INI DENGAN DETAIL DARI WEB HOSTING ANDA
// JANGAN gunakan URL GitHub Pages sebagai host!
$host = "127.0.0.1 ";        // Umumnya 'localhost' di cPanel hosting
$user = "root"; // Ganti dengan Username Database dari cPanel
$password = ""; // Ganti dengan Password Database dari cPanel
$db_name = "input barang";      // Ganti dengan Nama Database dari cPanel (contoh: u12345_klinikdb)

// Perhatian: Nama tabel Anda adalah 'input barang' (dengan spasi) di SQL dump,
// tetapi kode ini menggunakan 'barang'. Pastikan Anda menggunakan nama yang konsisten.
$nama_tabel = "`input barang`"; // Menggunakan backticks untuk nama tabel dengan spasi

// Membuat koneksi ke database
// Menggunakan $db_name dan $password untuk konsistensi variabel
$conn = new mysqli($host, $user, $password, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    // Memberikan pesan error yang lebih aman (tidak menampilkan password)
    die(json_encode(["error" => "Koneksi database gagal. Periksa konfigurasi host/user/password."]));
}

// --- HANDLE REQUEST ---
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    
    case 'GET':
        // GET (Baca Semua Data)
        $result = $conn->query("SELECT * FROM " . $nama_tabel . " ORDER BY id DESC");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
        break;

    case 'POST':
        // POST (Tambah Data Baru) - Menggunakan Prepared Statement (AMAN)
        $input = json_decode(file_get_contents('php://input'), true);
        
        // Perhatikan konsistensi nama kolom di sini (sesuai SQL dump sebelumnya)
        $stmt = $conn->prepare("INSERT INTO " . $nama_tabel . " (nama_barang, merek, kode_barang, ruangan, jenis_barang, jumlah, harga, tahun_beli, keadaan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Note: Asumsi tahun_kalibrasi tidak diisi di sini
        $stmt->bind_param(
            "sssssidss", // Jenis data: string x5, integer x1, string x3
            $input['nama'], $input['merek'], $input['kode'],
            $input['ruangan'], $input['jenis'], $input['jumlah'],
            $input['harga'], $input['tahun_beli'], 
            $input['keadaan']
        );
        
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
             echo json_encode(["success" => true, "id" => $conn->insert_id]);
        } else {
             echo json_encode(["error" => "Gagal menambahkan data", "details" => $stmt->error]);
        }
        
        $stmt->close();
        break;

    case 'DELETE':
        // DELETE (Hapus Data Berdasarkan ID) - Menggunakan Prepared Statement (AMAN)
        if (!isset($_GET['id'])) {
             echo json_encode(["error" => "ID tidak ditemukan untuk penghapusan."]);
             break;
        }
        
        $id = $_GET['id'];
        
        // Menggunakan prepared statement untuk mencegah SQL Injection
        $stmt = $conn->prepare("DELETE FROM " . $nama_tabel . " WHERE id=?");
        $stmt->bind_param("i", $id); // "i" untuk integer
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
             echo json_encode(["success" => true, "message" => "Data berhasil dihapus."]);
        } else {
             echo json_encode(["error" => "Gagal menghapus data atau ID tidak ditemukan."]);
        }
        
        $stmt->close();
        break;

    default:
        // Metode HTTP tidak dikenal (atau OPTIONS)
        if ($method != 'OPTIONS') {
            http_response_code(405); // Method Not Allowed
            echo json_encode(["error" => "Metode tidak didukung."]);
        }
}

$conn->close();
?>