<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventaris Ruangan Klinik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>


    <style>
        /* --- GLOBAL & VARS --- */
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s ease-in-out;
        }
        :root {
            --primary: #1d4ed8; 
            --primary-dark: #1e40af; 
            --primary-light: #eff6ff; 
            --secondary-text: #6b7280; 
            --bg-page: #f9fafb; 
            --shadow-soft: 0 5px 15px rgba(0, 0, 0, 0.08);
            --radius: 10px;
            --sidebar-width: 250px; 
            --padding-x: 30px; 
        }
        body {
            margin: 0;
            background-color: var(--bg-page);
            color: #1f2937;
            padding-bottom: 0; 
            min-height: 100vh; 
        }

        /* --- CONTAINER UTAMA & PENYESUAIAN LAYAR PENUH --- */
        .container {
            width: 100%; 
            margin: 0; 
            min-height: 100vh; 
            background-image: url(aset/01a.jpg);
            padding: 40px var(--padding-x);
            border-radius: 0; 
            box-shadow: none; 

            /* Sesuaikan padding kiri agar konten tidak tertutup sidebar di desktop */
            padding-left: calc(var(--padding-x) + var(--sidebar-width) + 20px); 
        }

        /* Batas untuk layar kecil */
        @media (max-width: 1200px) { /* Perbesar breakpoint sedikit */
            .container {
                padding-left: calc(var(--padding-x) + 20px); /* Jangan pakai sidebar width di desktop besar */
            }
        }
        @media (max-width: 992px) {
            .container {
                padding: 20px; 
                padding-left: 20px;
                padding-top: 110px; /* Sesuaikan agar tidak tertutup sidebar mobile */
                border-radius: 0;
            }
        }
        @media (max-width: 768px) {
            .container { padding: 20px; padding-left: 20px; }
        }

        h2 {
    color: white; /* UBAH WARNA TEKS MENJADI PUTIH */
    font-weight: 700; /* Sudah Tebal (Bold) */
    margin-bottom: 5px;
    display: flex;
    align-items: center;
}
        h4 { color: var(--secondary-text); margin-top: 0; margin-bottom: 30px; font-weight: 400; }

        /* --- FORM STYLING --- */
        form {
            background: var(--primary-light);
            border: 1px solid #e0e7ff;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
        }

        /* Penyesuaian Grid untuk 3 Kolom */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Atur menjadi 3 kolom konsisten */
            gap: 25px;
            margin-top: 15px; /* Jarak dari subheader */
        }
        
        /* Subheader untuk memisahkan bagian */
        .form-subheader {
            grid-column: 1 / -1; /* Mengisi seluruh lebar (3 kolom) */
            font-weight: 700;
            color: var(--primary-dark);
            margin-top: 25px;
            padding-bottom: 8px;
            border-bottom: 2px solid #c7d2fe;
            font-size: 1.1em;
        }
        
        /* Item radio group harus mengisi 1 kolom penuh */
        .radio-item {
            grid-column: span 1;
        }

        @media (max-width: 1024px) { /* Ubah breakpoint untuk grid */
            .form-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 kolom di tablet */
            }
            .form-subheader {
                grid-column: 1 / -1; 
            }
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr; /* 1 kolom di mobile */
            }
            .form-subheader {
                grid-column: span 1; /* Hapus span di mobile */
                font-size: 1em;
            }
        }

        label { font-weight: 600; color: #374151; display: block; margin-bottom: 6px; font-size: 0.95em; }
        input[type="text"], input[type="number"], select { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid #d1d5db; 
            border-radius: 8px; 
            background-color: white; 
            outline: none; 
            font-size: 15px; 
        }
        .radio-group { 
            display: flex; 
            flex-wrap: wrap; 
            gap: 15px; 
            padding-top: 5px; 
            line-height: 1.2;
            align-items: flex-start;
        }

        button.btn-action {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 25px;
            box-shadow: 0 4px 10px rgba(29, 78, 216, 0.3);
        }
        button.btn-action:hover {
            background-color: #1e40af;
            box-shadow: 0 6px 15px rgba(29, 78, 216, 0.4);
            transform: translateY(-1px);
        }

        /* --- FIXED SIDEBAR (MENU POJOK KIRI ATAS) --- */
        .fixed-sidebar-nav {
            position: fixed; 
            top: 0;
            left: 0;
            z-index: 1000;
            width: var(--sidebar-width);
            height: 100%; 
            padding-top: 0; 
            padding-bottom: 20px;
            background-color: #ffffff; 
            border-right: 1px solid #e5e7eb;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
            overflow-y: auto;
        }

        /* --- GRADIENT HEADER --- */
        .nav-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1em;
            padding: 15px 10px 15px 20px; 
            margin-bottom: 10px;
            border-bottom: none; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky; 
            top: 0;
            z-index: 10;
        }

        .nav-item {
            display: block;
            padding: 8px 10px;
            margin: 0 10px 5px 10px; 
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            color: #374151;
            cursor: pointer;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .nav-item.active {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
            box-shadow: 0 1px 3px rgba(29, 78, 216, 0.3);
        }

        .nav-item:hover:not(.active) {
            background-color: #f3f4f6;
            color: #1f2937;
        }

        /* --- MOBILE/TABLET ADJUSTMENTS --- */
        @media (max-width: 992px) {
            .fixed-sidebar-nav {
                position: absolute; 
                width: 100%;
                height: auto;
                top: 0;
                left: 0;
                padding: 10px;
                border: none;
                border-bottom: 1px solid #e5e7eb;
                box-shadow: 0 2px 5px rgba(0,0,0,0.05);
                display: flex; 
                flex-wrap: nowrap;
                overflow-x: auto;
                background-color: #f9fafb;
                padding-top: 10px;
            }
            .nav-header { 
                display: none; 
            }
            .nav-item {
                display: inline-block;
                padding: 6px 12px;
                margin-right: 8px;
                flex-shrink: 0;
                margin: 0 8px 0 0; 
                border: 1px solid #d1d5db;
                background-color: white;
                color: #374151;
            }
            .nav-item.active {
                background-color: var(--primary);
                color: white;
            }
        }

        /* --- TABLE STYLING --- */
        .table-controls button {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: white;
            border: none;
            padding: 10px 18px;
            font-weight: 600;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(96,165,250,0.4);
            cursor: pointer;
            transition: 0.3s;
        }
        .table-controls button:hover {
            background: linear-gradient(135deg, #60a5fa, #2563eb);
            box-shadow: 0 0 25px rgba(96,165,250,0.6);
            transform: translateY(-2px);
        }

       /* === MODAL CETAK - Warna abu-abu elegan & modern === */
#printModal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    justify-content: center;
    align-items: center;
    z-index: 2000;
    animation: fadeIn 0.25s ease;
}

#printModal .modal-content {
    background: #f3f4f6; /* abu muda */
    border-radius: 14px;
    padding: 25px 30px;
    border: 1px solid #d1d5db; /* abu medium */
    text-align: center;
    color: #1f2937;
    width: 320px;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    animation: slideUp 0.3s ease;
}

/* Teks instruksi */
#printModal p {
    font-size: 15px;
    color: #374151;
    font-weight: 500;
    margin-bottom: 10px;
}

/* Dropdown keadaan */
#printModal select {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    background: #ffffff;
    color: #1f2937;
    font-size: 15px;
    font-weight: 500;
    outline: none;
    transition: all 0.2s ease;
}

#printModal select:hover {
    border-color: #9ca3af;
    background: #f9fafb;
}

#printModal select:focus {
    border-color: #4b5563; /* abu gelap */
    box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.3);
}

/* Tombol modal */
#printModal button {
    margin: 8px;
    border: none;
    border-radius: 10px;
    padding: 10px 18px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.2s ease;
}

#printModal .ok-btn {
    background: #4b5563; /* abu tua */
    color: white;
}
#printModal .ok-btn:hover {
    background: #374151;
}

#printModal .cancel-btn {
    background: #e5e7eb; /* abu terang */
    color: #374151;
}
#printModal .cancel-btn:hover {
    background: #d1d5db;
}

/* Efek animasi lembut */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
@keyframes slideUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}


        .table-responsive { width: 100%; overflow-x: auto; margin-top: 0; }
        table { width: 100%; border-collapse: separate; border-spacing: 0; background: white; border-radius: var(--radius); overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); min-width: 800px; }
        th, td { padding: 14px 12px; border-bottom: 1px solid #e5e7eb; text-align: center; font-size: 14px; white-space: nowrap; }
        th { background-color: #e0e7ff; font-weight: 700; color: var(--primary); text-transform: uppercase; font-size: 0.85em; }
        .aksi-btn { display: flex; justify-content: center; gap: 12px; }
        .edit-btn, .hapus-btn { background: none; border: none;}
        .edit-btn { color: #3b82f6; }
        .hapus-btn { color: #ef4444; }

        /* --- PRINT STYLES (Diperbaiki agar lebih sesuai template) --- */
        @media print {
            /* 1. RESET UMUM */
            *, *:before, *:after {
                background: transparent !important;
                color: #000 !important;
                box-shadow: none !important;
                text-shadow: none !important;
            }

            /* 2. BODY DAN KONTEN UTAMA */
            body {
                background: white !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            .container { 
                box-shadow: none !important;
                margin: 0 !important;
                padding: 20px !important; /* Kurangi padding agar muat di kertas */
                min-width: 100% !important; 
                padding-left: 20px !important; /* Atur ulang padding container untuk print */
                padding-top: 20px !important; 
            }

            /* 3. SEMBUNYIKAN ELEMEN YANG TIDAK PERLU */
            form, 
            .fixed-sidebar-nav, 
            .table-controls, 
            .aksi-btn, 
            .aksi-kolom,
            nav, 
            button, 
            a[href]:after,
            header, 
            .nav-item.active { 
                display: none !important;
            }
            
            /* 4. JUDUL */
            h2 { 
                display: block !important; 
                margin: 10px 0 5px 0 !important;
                padding: 0 !important;
                color: #000 !important; 
                font-size: 18pt !important;
            }
            h4 {
                display: block !important;
                margin-bottom: 15px !important;
                color: #666 !important;
                font-size: 10pt !important;
                font-weight: 400 !important;
            }

            /* 5. TABEL DAN RESPONSIVITAS */
            .table-responsive { 
                overflow-x: visible !important; 
                width: 100% !important;
                margin: 0 !important;
            }
            
            table { 
                width: 100% !important;
                border-collapse: collapse !important;
                border: 1px solid #666 !important; 
                margin: 15px 0 !important;
                box-shadow: none !important;
                border-radius: 0 !important;
            }
            
            th, td { 
                border: 1px solid #666 !important;
                padding: 8px !important; 
                font-size: 10pt !important; 
                vertical-align: middle !important; /* Tengah vertikal */
                white-space: normal !important; /* Izinkan teks terpotong/wrap */
            }
            
            /* 6. STYLE WARNA LATAR BELAKANG UNTUK TABEL */
            th { 
                background-color: #e8e8e8 !important; 
                color: #000 !important; 
                -webkit-print-color-adjust: exact !important; 
                print-color-adjust: exact !important;
            }
            
            /* Warna selang-seling (stripes) */
            tbody tr:nth-child(even) { 
                background-color: #f5f5f5 !important; 
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            
            /* Agar span label (Jenis) tetap terlihat */
            td span { 
                background: none !important; 
                color: #000 !important; 
                font-weight: bold !important; 
                padding: 2px 5px !important; 
                border: 1px solid #ccc !important;
                border-radius: 4px !important;
            }
        }
    </style>
</head>
<body>

   <div class="fixed-sidebar-nav" id="navRuangan">
    <div class="nav-header">
        <i class="fas fa-filter"></i> Filter Ruangan
    </div>
</div>

<div class="container">

    <h2>
        <img src="aset/WhatsApp Image 2025-09-04 at 18.31.05.jpeg" 
             alt="Medical Homecare Logo" 
             style="margin-right: 10px; height: 35px; width: 35px; vertical-align: middle; border-radius: 100%;">
                    Manajemen Inventaris Ruangan
    </h2>
    <h4>Klinik ‘Aisyiyah Singkawang | Pencatatan Aset</h4>

    <form id="formBarang">
        <input type="hidden" id="editIndex" value="-1">
        
        <div class="form-grid">
            
            <div class="form-subheader"><i class="fas fa-box"></i> Detail Barang & Penempatan</div>
            
            <div>
                <label>Nama Barang*</label>
                <input type="text" id="nama" required placeholder="Contoh: Tensimeter Digital">
            </div>
            <div>
                <label>Merek/Model</label>
                <input type="text" id="merek" placeholder="Contoh: Omron M7">
            </div>
            <div>
                <label>Kode Barang*</label>
                <input type="text" id="kode" required placeholder="Contoh: KD-UGD-001">
            </div>

            <div class="radio-item">
                <label>Jenis Barang*</label>
                <div class="radio-group">
                    <label><input type="radio" name="jenis" value="Medis" required> Medis</label>
                    <label><input type="radio" name="jenis" value="Non Medis"> Non Medis</label>
                </div>
            </div>
            <div>
                <label>Ruangan*</label>
                <select id="ruangan" required></select>
            </div>
            <div>
                <label>Jumlah*</label>
                <input type="number" id="jumlah" required min="1" placeholder="Masukkan angka">
            </div>
            
            <div class="form-subheader"><i class="fas fa-file-invoice"></i> Pembelian & Kondisi</div>

            <div>
                <label>Harga Beli Satuan*</label>
                <input type="text" id="harga" required min="0" placeholder="Contoh: 1.500.000">
            </div>
            <div>
                <label>Tahun Pembelian*</label>
                <input type="number" id="tahun_beli" required min="1900" max="2100" placeholder="Contoh: 2023">
            </div>
            <div>
                <label>Tahun Kalibrasi</label>
                <input type="number" id="tahun_kalibrasi" min="1900" max="2100" placeholder="Kosongkan jika non-medis">
            </div>

            <div class="radio-item">
                <label>Keadaan*</label>
                <div class="radio-group">
                    <label><input type="radio" name="keadaan" value="Baik" required> Baik</label>
                    <label><input type="radio" name="keadaan" value="Rusak Ringan"> Rusak Ringan</label>
                    <label><input type="radio" name="keadaan" value="Rusak Berat"> Rusak Berat</label>
                </div>
            </div>
            
            <div></div> 
            <div></div> 
        </div>
        
        <button type="submit" id="btnSimpan" class="btn-action">
            <span id="simpanIcon"><i class="fas fa-save" style="margin-right: 5px;"></i></span> 
            <span id="simpanText">Simpan Data</span>
        </button>
    </form>
    
    <div class="table-controls">
        <button onclick="openPrintFilter()" class="print-btn">
            <i class="fas fa-print"></i> Cetak Tabel
        </button>
        <button class="excel-btn" onclick="exportToExcel()">
            <i class="fas fa-file-excel"></i> Export Excel
        </button>
    </div>

    <div class="table-responsive"> 
        <table id="tabelBarang">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Kode</th>
                    <th>Ruangan</th>
                    <th>Jenis</th>
                    <th>Beli</th>
                    <th>Kalibrasi</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Keadaan</th>
                    <th class="aksi-kolom">Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div> <div id="printModal">
    <div class="modal-content">
        <h3>Konfigurasi Cetak</h3>
        <p>Pilih **Ruangan** yang ingin dicetak:</p>
        <select id="printFilterSelect"></select>
        
        <p>Pilih **Keadaan** barang:</p>
        <select id="printKualitasSelect">
            <option value="Semua">Semua Keadaan</option>
            <option value="Baik">Baik </option>
            <option value="Rusak Ringan">Rusak Ringan </option>
            <option value="Rusak Berat">Rusak Berat </option>
        </select>

        <button class="ok-btn" onclick="performPrint()">Cetak Sekarang</button>
        <button class="cancel-btn" onclick="closePrintFilter()">Batal</button>
    </div>
</div>
   <script>
const form = document.getElementById("formBarang");
const tabel = document.querySelector("#tabelBarang tbody");
const ruanganSelect = document.getElementById("ruangan");
const printFilterSelect = document.getElementById("printFilterSelect");
const btnSimpan = document.getElementById("btnSimpan");
const simpanIcon = document.getElementById("simpanIcon");
const simpanText = document.getElementById("simpanText");
const editIndexInput = document.getElementById("editIndex");
const inputHarga = document.getElementById("harga");

let dataBarang = JSON.parse(localStorage.getItem("inventaris")) || [];
let daftarRuangan = JSON.parse(localStorage.getItem("ruanganList")) || [
    "Poli Umum", "Poli Gigi", "Poli KIA & KB", "Administrasi", "Laboratorium", 
    "Ruang Nifas", "Ruang Bersalin", "Ruang Tindakan KIA & KB", "Ruang Sterilisasi", 
    "Ruang Farmasi", "Ruang Tunggu", "Ruang Menyusui"
];

let filterAktif = "Semua";
let printFilterAktif = "Semua";
let printKualitasAktif = "Semua";

// === [ONLINE STORAGE] ===
// SETELAH DIUBAH (HARUS KE ALAMAT ONLINE ANDA)
const API_URL = "http://inventarisruanganklinik24.lovestoblog.com/api.php";

// === Saat Halaman Dimuat ===
document.addEventListener("DOMContentLoaded", async () => {
    inputHarga.setAttribute("type", "text");
    inputHarga.setAttribute("inputmode", "numeric");
    inputHarga.placeholder = "Contoh: 1.500.000";
    inputHarga.addEventListener("input", formatHarga);

    renderRuanganDropdown();
    renderNavRuangan();

    // === [ONLINE STORAGE] ===
    await loadDariServer(); // ambil data terbaru dari server
    renderTabel();
});

// === Utility ===
function formatHarga(e) {
    let value = e.target.value.replace(/\D/g, "");
    e.target.value = value ? new Intl.NumberFormat("id-ID").format(value) : "";
}
function getHargaNumber() {
    return inputHarga.value.replace(/\./g, "").replace(/,/g, "");
}

/* === Dropdown Ruangan & Sidebar === */
function renderRuanganDropdown() {
    ruanganSelect.innerHTML = "";
    daftarRuangan.forEach((nama) => {
        const opt = document.createElement("option");
        opt.value = nama;
        opt.textContent = nama;
        ruanganSelect.appendChild(opt);
    });

    const tambahOpt = document.createElement("option");
    tambahOpt.value = "tambah";
    tambahOpt.textContent = "➕ Tambah Ruangan Baru";
    ruanganSelect.appendChild(tambahOpt);

    ruanganSelect.addEventListener("change", () => {
        if (ruanganSelect.value === "tambah") {
            const namaBaru = prompt("Masukkan nama ruangan baru:");
            if (namaBaru && namaBaru.trim() !== "") {
                daftarRuangan.push(namaBaru.trim());
                localStorage.setItem("ruanganList", JSON.stringify(daftarRuangan));
                renderRuanganDropdown();
                renderNavRuangan();
                ruanganSelect.value = namaBaru.trim();
            } else {
                ruanganSelect.value = daftarRuangan[0] || "";
            }
        }
    });
}

function renderNavRuangan() {
    const navRuangan = document.getElementById("navRuangan");
    navRuangan.innerHTML = '<div class="nav-header"><i class="fas fa-filter"></i> Filter Ruangan</div>';

    const btnSemua = document.createElement("div");
    btnSemua.className = "nav-item" + (filterAktif === "Semua" ? " active" : "");
    btnSemua.textContent = "Semua";
    btnSemua.onclick = () => handleNavClick("Semua");
    navRuangan.appendChild(btnSemua);

    daftarRuangan.forEach(nama => {
        const btn = document.createElement("div");
        btn.className = "nav-item" + (nama === filterAktif ? " active" : "");
        btn.textContent = nama;
        btn.onclick = () => handleNavClick(nama);
        navRuangan.appendChild(btn);
    });
}

function handleNavClick(namaRuangan) {
    filterAktif = namaRuangan;
    renderNavRuangan();
    renderTabel();
    resetForm();
}

/* === Render Tabel === */
function renderTabel() {
    tabel.innerHTML = "";
    const dataFilter = filterAktif === "Semua"
        ? dataBarang
        : dataBarang.filter(b => b.ruangan === filterAktif);

    if (dataFilter.length === 0) {
        tabel.innerHTML = `<tr><td colspan="11" style="color:#666;font-style:italic;">Belum ada data ${filterAktif === "Semua" ? "" : "di ruangan ini: " + filterAktif}</td></tr>`;
        return;
    }

    dataFilter.forEach((b, index) => {
        const row = document.createElement("tr");
        const jenisColor = b.jenis === 'Medis' ? {bg: '#d1e7ff', color: '#1d4ed8'} : {bg: '#d2f3d2', color: '#047857'};

        row.innerHTML = `
            <td>${index + 1}</td>
            <td style="text-align:left;font-weight:600;">${b.nama}</td>
            <td>${b.kode}</td>
            <td>${b.ruangan}</td>
            <td><span style="padding:3px 8px;border-radius:4px;font-size:0.85em;font-weight:600;background-color:${jenisColor.bg};color:${jenisColor.color};">${b.jenis}</span></td>
            <td>${b.tahun_beli}</td>
            <td>${b.tahun_kalibrasi || '-'}</td>
            <td>${b.jumlah}</td>
            <td>Rp ${parseInt(b.harga || 0).toLocaleString("id-ID")}</td>
            <td>${b.keadaan}</td>
            <td class="aksi-btn aksi-kolom">
                <button class="edit-btn" onclick="editBarang(${b.id})"><i class="fas fa-edit"></i></button>
                <button class="hapus-btn" onclick="hapusBarang(${b.id})"><i class="fas fa-trash-alt"></i></button>
            </td>
        `;
        tabel.appendChild(row);
    });
}

/* === Simpan / Edit === */
form.addEventListener("submit", async e => {
    e.preventDefault();

    const selectedJenis = document.querySelector("input[name='jenis']:checked");
    const selectedKeadaan = document.querySelector("input[name='keadaan']:checked");
    const idEdit = parseInt(editIndexInput.value);

    if (!selectedJenis || !selectedKeadaan || !ruanganSelect.value) {
        alert("⚠️ Harap lengkapi semua kolom wajib bertanda *.");
        return;
    }

    const barang = {
        id: idEdit !== -1 ? idEdit : Date.now(),
        nama: document.getElementById("nama").value.trim(),
        merek: document.getElementById("merek").value.trim(),
        kode: document.getElementById("kode").value.trim(),
        jenis: selectedJenis.value,
        ruangan: ruanganSelect.value,
        jumlah: parseInt(document.getElementById("jumlah").value) || 0,
        harga: getHargaNumber(),
        tahun_beli: document.getElementById("tahun_beli").value,
        tahun_kalibrasi: document.getElementById("tahun_kalibrasi").value,
        keadaan: selectedKeadaan.value
    };

    if (idEdit === -1) {
        dataBarang.push(barang);
    } else {
        const index = dataBarang.findIndex(b => b.id === idEdit);
        if (index !== -1) dataBarang[index] = barang;
    }

    localStorage.setItem("inventaris", JSON.stringify(dataBarang));
    renderTabel();
    resetForm();

    // === [ONLINE STORAGE] ===
    await simpanKeServer(barang);

    alert("✅ Data berhasil disimpan!");
});

/* === Hapus === */
window.hapusBarang = async id => {
    if (confirm("Yakin ingin menghapus data ini?")) {
        dataBarang = dataBarang.filter(b => b.id !== id);
        localStorage.setItem("inventaris", JSON.stringify(dataBarang));
        renderTabel();
        alert("🗑️ Data terhapus.");

        // === [ONLINE STORAGE] ===
        await hapusDariServer(id);
    }
};

window.editBarang = id => {
    const b = dataBarang.find(x => x.id === id);
    if (!b) return alert("Data tidak ditemukan!");

    document.getElementById("nama").value = b.nama;
    document.getElementById("merek").value = b.merek;
    document.getElementById("kode").value = b.kode;
    document.getElementById("jumlah").value = b.jumlah;
    inputHarga.value = new Intl.NumberFormat("id-ID").format(b.harga || 0);
    document.getElementById("tahun_beli").value = b.tahun_beli;
    document.getElementById("tahun_kalibrasi").value = b.tahun_kalibrasi || "";
    ruanganSelect.value = b.ruangan;
    document.querySelector(`input[name="jenis"][value="${b.jenis}"]`).checked = true;
    document.querySelector(`input[name="keadaan"][value="${b.keadaan}"]`).checked = true;
    editIndexInput.value = b.id;

    simpanIcon.innerHTML = '<i class="fas fa-sync-alt" style="margin-right:5px;"></i>';
    simpanText.textContent = 'Update Data';
    window.scrollTo({top:0,behavior:"smooth"});
};

function resetForm() {
    form.reset();
    editIndexInput.value = -1;
    simpanIcon.innerHTML = '<i class="fas fa-save" style="margin-right:5px;"></i>';
    simpanText.textContent = 'Simpan Data';
    inputHarga.value = "";
    document.getElementById("tahun_kalibrasi").value = "";
}

// === [ONLINE STORAGE] ===
// Ambil semua data dari server
async function loadDariServer() {
    try {
        const res = await fetch(API_URL);
        const data = await res.json();
        if (Array.isArray(data)) {
            dataBarang = data;
            localStorage.setItem("inventaris", JSON.stringify(data));
        }
    } catch (err) {
        console.warn("⚠️ Tidak bisa memuat data dari server:", err);
    }
}

// Simpan data baru ke server
async function simpanKeServer(barang) {
    try {
        await fetch(API_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(barang)
        });
    } catch (err) {
        console.warn("⚠️ Gagal menyimpan ke server:", err);
    }
}

// Hapus data di server
async function hapusDariServer(id) {
    try {
        await fetch(`${API_URL}?id=${id}`, { method: "DELETE" });
    } catch (err) {
        console.warn("⚠️ Gagal menghapus di server:", err);
    }
}


/* === EKSPOR EXCEL === */
function exportToExcel() {
    if (dataBarang.length === 0) return alert("⚠️ Tidak ada data untuk diekspor.");

    const dataToExport = filterAktif === "Semua" ? dataBarang : dataBarang.filter(b => b.ruangan === filterAktif);
    if (dataToExport.length === 0) return alert(`⚠️ Tidak ada data ${filterAktif} untuk diekspor.`);

    const headers = ["No.", "Nama Barang", "Merek/Model", "Kode Barang", "Ruangan", "Jenis Barang", "Jumlah", "Harga Beli Satuan (Rp)", "Tahun Beli", "Tahun Kalibrasi", "Keadaan"];
    const rows = dataToExport.map((b, i) => [i + 1, b.nama, b.merek, b.kode, b.ruangan, b.jenis, b.jumlah, parseInt(b.harga || 0), b.tahun_beli, b.tahun_kalibrasi || "", b.keadaan]);
    const ws = XLSX.utils.aoa_to_sheet([headers, ...rows]);
    ws["!cols"] = headers.map((h, i) => ({ wch: Math.max(h.length, ...rows.map(r => (r[i]?.toString().length || 0))) + 2 }));

    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Inventaris");
    const namaFile = `Inventaris_${filterAktif}_${new Date().toLocaleDateString('id-ID')}.xlsx`;
    XLSX.writeFile(wb, namaFile);

    alert("✅ Data berhasil diekspor ke Excel!");
}

/* === CETAK LAPORAN === */
function openPrintFilter() {
    const printFilterSelect = document.getElementById("printFilterSelect");
    printFilterSelect.innerHTML = "";
    const optSemua = new Option("Semua Ruangan", "Semua");
    printFilterSelect.appendChild(optSemua);
    daftarRuangan.forEach(nama => printFilterSelect.appendChild(new Option(nama, nama)));
    document.getElementById("printModal").style.display = "flex";
}

function closePrintFilter() {
    document.getElementById("printModal").style.display = "none";
}

function performPrint() {
    printFilterAktif = document.getElementById("printFilterSelect").value;
    printKualitasAktif = document.getElementById("printKualitasSelect").value;

    let dataCetak = [...dataBarang];
    if (printFilterAktif !== "Semua") dataCetak = dataCetak.filter(b => b.ruangan === printFilterAktif);
    if (printKualitasAktif !== "Semua") dataCetak = dataCetak.filter(b => b.keadaan === printKualitasAktif);
    if (dataCetak.length === 0) return alert("⚠️ Tidak ada data sesuai filter.");

    const printWindow = window.open('', '', 'width=900,height=650');
    printWindow.document.write(`
        <html>
        <head>
            <title>Cetak Inventaris - Klinik 'Aisyiyah Singkawang</title>
            <style>
                body { font-family: Arial, sans-serif; padding: 25px; }
                h2, h4 { text-align: center; margin: 0; }
                h2 { font-size: 18pt; margin-bottom: 5px; }
                h4 { font-size: 11pt; color: #444; margin-bottom: 20px; }
                table { width: 100%; border-collapse: collapse; font-size: 10pt; margin-top: 10px; }
                th, td { border: 1px solid #666; padding: 6px; text-align: center; }
                th { background: #e5e7eb; }
                tr:nth-child(even) { background: #f9fafb; }
                td:nth-child(2) { text-align: left; }
                .footer { margin-top: 30px; text-align: right; font-size: 10pt; color: #555; }
            </style>
        </head>
        <body>
            <h2>KLINIK ‘AISYIYAH SINGKAWANG</h2>
            <h4>Laporan Inventaris ${printFilterAktif === "Semua" ? "" : `(${printFilterAktif})`}</h4>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Kode</th>
                        <th>Ruangan</th>
                        <th>Jenis</th>
                        <th>Tahun Beli</th>
                        <th>Tahun Kalibrasi</th>
                        <th>Jumlah</th>
                        <th>Harga (Rp)</th>
                        <th>Keadaan</th>
                    </tr>
                </thead>
                <tbody>
                    ${dataCetak.map((b, i) => `
                        <tr>
                            <td>${i + 1}</td>
                            <td>${b.nama}</td>
                            <td>${b.kode}</td>
                            <td>${b.ruangan}</td>
                            <td>${b.jenis}</td>
                            <td>${b.tahun_beli}</td>
                            <td>${b.tahun_kalibrasi || '-'}</td>
                            <td>${b.jumlah}</td>
                            <td>${parseInt(b.harga || 0).toLocaleString("id-ID")}</td>
                            <td>${b.keadaan}</td>
                        </tr>`).join('')}
                </tbody>
            </table>
            <div class="footer">
                Dicetak pada: ${new Date().toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })}
            </div>
            <script>
                window.onload = () => { window.print(); window.onafterprint = () => window.close(); };
    `);
    printWindow.document.close();
    closePrintFilter();
}
</script>

</body>
</html>