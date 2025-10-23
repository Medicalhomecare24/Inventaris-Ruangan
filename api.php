<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$host = "localhost";
$user = "root";         // ubah kalau perlu
$pass = "";             // ubah kalau punya password
$db   = "db_klinik";    // ubah sesuai nama database kamu

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi gagal: " . $conn->connect_error]));
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $result = $conn->query("SELECT * FROM inventaris ORDER BY id DESC");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        $stmt = $conn->prepare("INSERT INTO inventaris (nama, merek, kode, ruangan, jenis, jumlah, harga, tahun_beli, tahun_kalibrasi, keadaan) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssssiisss",
            $input['nama'], $input['merek'], $input['kode'], $input['ruangan'], $input['jenis'],
            $input['jumlah'], $input['harga'], $input['tahun_beli'], $input['tahun_kalibrasi'], $input['keadaan']
        );
        $stmt->execute();
        echo json_encode(["message" => "Data berhasil disimpan"]);
        break;

    case 'DELETE':
        parse_str($_SERVER['QUERY_STRING'], $params);
        $id = $params['id'] ?? 0;
        $conn->query("DELETE FROM inventaris WHERE id=$id");
        echo json_encode(["message" => "Data berhasil dihapus"]);
        break;

    default:
        echo json_encode(["message" => "Metode tidak didukung"]);
}
$conn->close();
?>
