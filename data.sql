-- =========================================================
-- DATABASE: inventaris_klinik
-- =========================================================
CREATE DATABASE IF NOT EXISTS inventaris_klinik
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE inventaris_klinik;

-- =========================================================
-- TABEL: ruangan
-- Menyimpan daftar ruangan di klinik
-- =========================================================
CREATE TABLE ruangan (
    id_ruangan INT AUTO_INCREMENT PRIMARY KEY,
    nama_ruangan VARCHAR(100) NOT NULL UNIQUE,
    keterangan VARCHAR(255) DEFAULT NULL,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================
-- TABEL: inventaris
-- Menyimpan seluruh barang berdasarkan ruangan
-- =========================================================
CREATE TABLE inventaris (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(150) NOT NULL,
    merek_model VARCHAR(100) DEFAULT NULL,
    kode_barang VARCHAR(100) NOT NULL UNIQUE,
    jenis_barang ENUM('Medis', 'Non Medis') NOT NULL,
    jumlah INT NOT NULL DEFAULT 1,
    harga_beli BIGINT NOT NULL DEFAULT 0,
    tahun_pembelian YEAR NOT NULL,
    tahun_kalibrasi YEAR DEFAULT NULL,
    keadaan ENUM('Bagus', 'Rusak Ringan', 'Rusak Berat') NOT NULL DEFAULT 'Bagus',
    id_ruangan INT NOT NULL,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    diperbarui_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

-- =========================================================
-- TABEL: pengguna (opsional)
-- Jika nanti ingin menambah sistem login
-- =========================================================
CREATE TABLE pengguna (
    id_pengguna INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    peran ENUM('Admin', 'Petugas', 'Viewer') DEFAULT 'Petugas',
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================
-- DATA AWAL RUANGAN (opsional)
-- =========================================================
INSERT INTO ruangan (nama_ruangan) VALUES
('Poli Umum'),
('Poli Gigi'),
('Administrasi'),
('Poli KIA & KB'),
('UGD & Tindakan'),
('Farmasi'),
('Laboratorium'),
('Nifas'),
('Tindakan KIA & KB');
