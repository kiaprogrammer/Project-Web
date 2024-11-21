<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data E - Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .header img {
            width: 40px;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
        }

        .container {
            display: flex;
            padding: 20px;
        }

        .sidebar {
            width: 250px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .sidebar img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;
        }

        .sidebar h3 {
            text-align: center;
            margin: 10px 0;
        }

        .sidebar p {
            text-align: center;
            background-color: #A8CFFB;
            border-radius: 15px;
            padding: 5px 10px;
            display: inline-block;
            margin: 0 auto;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            flex-grow: 1;
            margin-top: 20px;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 15px 0;
            background-color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover {
            background-color: rgba(168, 207, 251, 0.6);
            border-radius: 20px;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }

        .sidebar ul li a {
            color: inherit;
            text-decoration: none;
        }

        .sidebar ul li a:focus,
        .sidebar ul li a:active {
            outline: none;
            box-shadow: none;
        }

        ul li.active {
        background-color: #ddd; /* Gaya latar belakang untuk item aktif */
        color: #000; /* Warna teks untuk item aktif */
        }

        .breadcrumb {
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-top: 0px;
            border-radius: 5px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: inherit;
        }

        .breadcrumb a:focus,
        .breadcrumb a:active,
        .breadcrumb a:visited {
            color: inherit;
            outline: none;
        }

        .content {
            flex: 1;
            margin-left: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* Container untuk menempatkan tombol di baris atas */
        .top-form-container {
            display: flex;
            align-items: center; /* Sejajarkan item secara vertikal */
            gap: 10px; /* Tambahkan jarak antara tombol unggah dan info file */
            margin-bottom: 10px; /* Tambahkan jarak di bawah container */
            margin-top: 10px;
        }

        /* Gaya untuk tombol unggah */
        .btn-upload {
            padding: 10px 30px;
            background-color: white;
            color: black; /* Warna font hitam */
            border: 1px solid #007bff; /* Border halus dengan warna biru */
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px; /* Border halus */
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none; /* Hapus underline jika ada */
        }

        .btn-upload i {
            font-size: 18px; /* Ukuran ikon lebih besar */
        }

        .btn-upload:hover {
            color: white; /* Warna font putih saat hover */
            background-color: #007bff; /* Background biru saat hover */
        }

        .file-info {
            font-size: 14px;
            color: #555;
        }

        /* Container utama untuk konten form */
        .form-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Kontainer utama untuk form */
        .main-form-content {
            display: flex;
            justify-content: space-between; /* Menempatkan grup kiri dan kanan dalam satu baris */
            gap: 10px; /* Menambahkan jarak antara kolom kiri dan kanan */
            padding: 20px;
        }

        /* Container untuk grup form kiri */
        .form-group-left {
            flex: 0 0 60%; /* 70% lebar untuk form kiri */
            display: flex;
            flex-direction: column;
            gap: 20px; /* Ruang antara elemen dalam grup kiri */
        }

        /* Container untuk grup form kanan */
        .form-group-right {
            flex: 0 0 40%; /* 30% lebar untuk form kanan */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Ruang antara elemen dalam grup kanan */
        }

        /* Styling untuk bidang formulir individual */
        .from-judul {
            display: flex;
            flex-direction: column;
        }

        .from-judul label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .from-judul input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; /* Memastikan padding termasuk dalam total lebar dan tinggi */
        }

        /* Styling untuk bidang formulir individual */
        .from-pengarang {
            display: flex;
            flex-direction: column;
        }

        .from-pengarang label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .from-pengarang input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; /* Memastikan padding termasuk dalam total lebar dan tinggi */
        }

        /* Styling untuk layout dua kolom */
        .form-terbit {
            display: flex;
            justify-content: space-between; /* Buat ruang di antara dua kolom */
            gap: 10px; /* Berikan ruang di antara dua kolom */
            margin-bottom: 20px; /* Tambahkan ruang di bawah grup */
        }

        /* Styling untuk bidang formulir individual */
        .form-field {
            display: flex;
            flex-direction: column;
            width: 48%; /* Tetapkan lebar kolom */
        }

        .form-field label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-field input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; /* Memastikan padding termasuk dalam total lebar dan tinggi */
        }

        /* Styling untuk deskripsi group */
        .from-deskripsi {
            display: flex;
            flex-direction: column;
            gap: 10px; /* Tambahkan ruang antara elemen */
            margin-bottom: 20px; /* Tambahkan ruang di bawah grup */
        }

        .from-deskripsi label {
            font-weight: bold;
        }

        .from-deskripsi textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; /* Memastikan padding termasuk dalam total lebar dan tinggi */
            resize: vertical; /* Mengizinkan pengubahan ukuran vertikal */
            height: 150px; /* Menetapkan tinggi default */
        }

        .char-counter {
            font-size: 12px;
            color: #666;
            text-align: right;
            margin-top: 5px;
        }

        .from-kategori {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px; /* Tambahkan ruang di bawah grup */
        }

        .from-kategori label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .select-wrapper {
            position: relative;
            width: 100%;
        }

        .from-kategori select {
            width: 100%;
            padding: 10px 20px; /* Memberikan ruang di sisi kanan untuk ikon */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: white;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg%20xmlns="http://www.w3.org/2000/svg"%20width="24"%20height="24"%20viewBox="0%200%2024%2024"><path%20fill="none"%20stroke="currentColor"%20stroke-width="2"%20d="M6%207l6%206l6-6"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center; /* Posisi ikon di sebelah kanan */
            background-size: 12px 12px; /* Ukuran ikon */
        }

        .from-kategori select:focus {
            border-color: #007bff;
        }

        .select-wrapper::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        /* Style untuk Unggah Cover Buku */
        .form-group label {
            font-weight: bold;
        }

        .upload-preview {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            text-align: center;
            position: relative; /* Menentukan posisi relatif untuk pembungkus */
        }

        .preview-container {
            position: relative;
            width: 80%;
            max-width: 350px; /* Atur ukuran maksimal untuk container */
        }

        .upload-preview img {
            width: 100%;
            max-height: 500px; /* Atur ukuran maksimal untuk gambar */
            border: 1px solid #ccc;
            border-radius: 10px;
            object-fit: cover;
        }

        .upload-preview button {
            position: absolute;
            bottom: 10px; /* Atur posisi tombol di pojok kanan bawah */
            left: 50%;
            transform: translateX(-50%); /* Pusatkan tombol secara horizontal */
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .upload-preview button:hover {
            background-color: #0056b3;
        }

        .upload-preview .cover-info {
            margin-top: 5px; /* Berikan jarak antara cover dan info */
            font-size: 14px;
            color: #555;
        }

        .form-actions {
            display: flex;
            justify-content: center;  /* Menempatkan tombol di tengah secara horizontal */
            align-items: center;
            gap: 10px;
        }

        .form-actions button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-actions .btn-cancel {
            background-color: #ccc;
            color: #333;
        }

        .form-actions .btn-cancel:hover {
            background-color: #b3b3b3;
        }

        .form-actions .btn-save {
            background-color: #007bff;
            color: white;
        }

        .form-actions .btn-save:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="header">
        <img alt="Library logo" src="assets/logo perpusdig.png" />
        <h1>&#124; PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <img alt="User profile picture" src="assets/profil.png" />
            <h3>Ini Bapak Budi</h3>
            <p>Super Admin</p>
            <ul>
                <li id="dashboard"><a href="dashboard_super.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li id="ebook"><a href="Ebook.php"><i class="fas fa-book"></i>E - Book</a></li>
                <li id="buku"><a href="Buku.php"><i class="fas fa-book-open"></i>Buku</a></li>
                <li id="data_anggota"><a href="data_anggota.php"><i class="fas fa-users"></i>Data Anggota</a></li>
                <li id="data_admin"><a href="data_admin.php"><i class="fas fa-user-shield"></i>Data Admin</a></li>
                <li id="pengajuan"><i class="fas fa-file-alt"></i>Pengajuan Peminjaman</li>
                <li id="riwayat"><i class="fas fa-history"></i>Riwayat Peminjaman</li>
            </ul>
        </div>
        <div class="content">
            <div class="breadcrumb">
                <h2>Tambah Data</h2>
                <a href="dashboard_super.php">Beranda</a> / <a href="buku.php">Data Buku</a> / Tambah Data E-Book
            </div>
            <form>
                <div class="form-container">
                    <div class="top-form-container">
                        <label for="file-upload" class="btn-upload">
                            <i class="fas fa-upload"></i> Unggah E - Book
                        </label>
                        <input type="file" id="file-upload" style="display: none;">
                        <div id="file-info" class="file-info">
                            <span id="file-name">No file selected</span> |
                            <span id="file-size">0 KB</span>
                        </div>
                    </div>
                    <div class="main-form-content">
                        <div class="form-group-left">
                            <div class="from-judul">
                                <label for="judul">Judul</label>
                                <input type="text" id="judul" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="from-pengarang">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" id="pengarang" placeholder="Masukkan Nama Pengarang">
                            </div>
                            <div class="form-terbit">
                                <div class="form-field">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" id="penerbit" placeholder="Nama Penerbit">
                                </div>
                                <div class="form-field">
                                    <label for="tahun">Tahun Terbit</label>
                                    <input type="text" id="tahun" placeholder="Tahun Terbit" pattern="\d{4}" title="Masukkan tahun dalam format 4 digit, misalnya: 2023">
                                </div>
                            </div>
                            <div class="from-deskripsi">
                                <label for="sinopsis">Deskripsi E - Book</label>
                                <textarea id="sinopsis" placeholder="Masukkan deskripsi E - Book"></textarea>
                                <div class="char-counter" id="char-counter">0/500</div>
                            </div>
                        </div>
                        <div class="form-group-right">
                            <div class="from-kategori">
                                <label for="kategori">Kategori</label>
                                <select id="kategori">
                                    <option value="kategori1">Kategori 1</option>
                                    <option value="kategori2">Kategori 2</option>
                                    <option value="kategori3">Kategori 3</option>
                                </select>
                            </div>
                            <div class="upload-preview">
                                <label for="cover">Unggah Cover E - Book</label>
                                <div class="preview-container">
                                    <img id="preview-img" src="https://via.placeholder.com/150" alt="Preview Sampul">
                                    <button type="button" id="upload-cover">
                                        <i class="fas fa-upload"></i> Unggah Sampul
                                    </button>
                                </div>
                                <div id="cover-info" class="cover-info">
                                    <span id="cover-name">No cover selected</span> |
                                    <span id="cover-size">0 KB</span>
                                </div>
                                <input type="file" id="cover-file" accept="image/*" style="display: none;">
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-cancel">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const sinopsis = document.getElementById('sinopsis');
        const charCounter = document.getElementById('char-counter');
        const coverFile = document.getElementById('cover-file');
        const previewImg = document.getElementById('preview-img');
        const uploadCover = document.getElementById('upload-cover');
        const fileUpload = document.getElementById('file-upload');
        const fileName = document.getElementById('file-name');
        const fileSize = document.getElementById('file-size');
        const coverName = document.getElementById('cover-name');
        const coverSize = document.getElementById('cover-size');

        // Set the max file size to 1 GB
        const maxFileSize = 1073741824; // 1 GB in bytes

        // Update char counter for Deskripsi
        sinopsis.addEventListener('input', () => {
            const charCount = sinopsis.value.length;
            charCounter.textContent = `${charCount}/500`; // Update the counter
        });

        // Preview cover image
        uploadCover.addEventListener('click', () => {
            coverFile.click(); // Trigger the file input click
        });

        coverFile.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                // Check file size
                if (file.size > maxFileSize) {
                    alert("Ukuran file terlalu besar. Maksimal 1 GB.");
                    // Reset file input
                    coverFile.value = '';
                    coverName.textContent = 'No cover selected';
                    coverSize.textContent = '0 KB';
                    previewImg.src = ''; // Clear preview image
                } else {
                    // Display file name and size
                    coverName.textContent = file.name; // Display file name
                    coverSize.textContent = (file.size / 1024).toFixed(2) + ' KB'; // Display file size in KB

                    // If the file is an image, show preview
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        previewImg.src = e.target.result; // Set preview image to the uploaded file
                    };
                    reader.readAsDataURL(file);
                }
            } else {
                coverName.textContent = 'No cover selected';
                coverSize.textContent = '0 KB';
                previewImg.src = ''; // Clear preview image
            }
        });

        // File Upload for E-Book
        fileUpload.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                // Check file size
                if (file.size > maxFileSize) {
                    alert("Ukuran file terlalu besar. Maksimal 1 GB.");
                    // Reset file input
                    fileUpload.value = '';
                    fileName.textContent = 'No file selected';
                    fileSize.textContent = '0 KB';
                } else {
                    // Display file name and size
                    fileName.textContent = file.name; // Display file name
                    fileSize.textContent = (file.size / 1024).toFixed(2) + ' KB'; // Display file size in KB
                }
            } else {
                fileName.textContent = 'No file selected';
                fileSize.textContent = '0 KB';
            }
        });
        $(document).ready(function() {
        // Ambil URL saat ini
        var currentUrl = window.location.pathname.split('/').pop();

        // Tambahkan kelas 'active' pada elemen <li> yang sesuai
        $('ul li a').each(function() {
            var href = $(this).attr('href');
            if (href === currentUrl) {
                $(this).parent().addClass('active');
            }
        });
    });
    </script>
</body>

</html>
