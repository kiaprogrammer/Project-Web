<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="header.css" rel="stylesheet" />
    <link href="sidebar.css" rel="stylesheet" />
    <link href="breadcrumb.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
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

        .breadcrumb {
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-top: 0px;
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

        .form-group {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-group label {
            flex: 1;
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            flex: 2;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .upload-preview {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            text-align: center;
        }

        .upload-preview img {
            max-width: 100%;
            max-height: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            object-fit: cover;
        }

        .upload-preview button {
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

        .form-group .char-counter {
            font-size: 12px;
            color: #666;
            text-align: right;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
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
    <!-- Include Header -->
    <div class="header">
      <img alt="Library logo" src="assets/logo perpusdig.png" />
      <h1>&#124; PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>

    <div class="container">
        <!-- Include Sidebar -->
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
            <!-- Include Breadcrumb -->
            <div class="breadcrumb">
            <h2>Tambah Data</h2>
            <a href="dashboard_super.php">Beranda</a> / <a href="buku.php">Data Buku</a> / Tambah Data Buku
        </div>
            <form>
                <!-- Baris 1 -->
                <div class="form-group">
                    <button type="button" class="btn-upload"><i class="fas fa-upload"></i> Unggah E-Book</button>
                </div>

                <!-- Baris 2 -->
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" placeholder="Masukkan Judul Buku">
                    <label for="kategori">Kategori</label>
                    <select id="kategori">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="fiksi">Fiksi</option>
                        <option value="non-fiksi">Non-Fiksi</option>
                        <option value="pendidikan">Pendidikan</option>
                    </select>
                </div>

                <!-- Baris 3 -->
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" id="penulis" placeholder="Masukkan Nama Penulis">
                    <div class="upload-preview">
                        <img id="preview-img" src="https://via.placeholder.com/150" alt="Preview Sampul">
                        <button type="button" id="upload-cover">Unggah Sampul</button>
                        <input type="file" id="cover-file" accept="image/*" style="display: none;">
                    </div>
                </div>

                <!-- Baris 4 -->
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" id="penerbit" placeholder="Masukkan Nama Penerbit">
                    <label for="tahun-terbit">Tahun Terbit</label>
                    <input type="text" id="tahun-terbit" placeholder="YYYY" pattern="\d{4}" title="Masukkan tahun dengan format 4 digit, misal 2024">
                </div>


                <!-- Baris 5 -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Buku</label>
                    <textarea id="deskripsi" maxlength="500" placeholder="Masukkan Deskripsi Buku"></textarea>
                    <div class="char-counter" id="char-counter">0/1000</div>
                </div>

                <!-- Baris 6 -->
                <div class="form-actions">
                    <button type="button" class="btn-cancel">Batal</button>
                    <button type="submit" class="btn-save">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const deskripsi = document.getElementById('deskripsi');
        const charCounter = document.getElementById('char-counter');
        const coverFile = document.getElementById('cover-file');
        const previewImg = document.getElementById('preview-img');
        const uploadCover = document.getElementById('upload-cover');

        // Update char counter
        deskripsi.addEventListener('input', () => {
            charCounter.textContent = `${deskripsi.value.length}/1000`;
        });

        // Preview cover image
        uploadCover.addEventListener('click', () => {
            coverFile.click();
        });

        coverFile.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
