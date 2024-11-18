<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PerpusDig - Tambah Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      display: flex;
    }
    .sidebar {
      width: 20%;
      background-color: #ffffff;
      border-right: 1px solid #ddd;
      padding: 20px;
    }
    .sidebar h2 {
      font-size: 18px;
      color: #333;
    }
    .sidebar a {
      display: block;
      margin: 10px 0;
      text-decoration: none;
      color: #333;
    }
    .sidebar a:hover {
      color: #007bff;
    }
    .content {
      width: 80%;
      padding: 20px;
      background-color: #ffffff;
    }
    .content h1 {
      font-size: 24px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }
    .form-group input, .form-group textarea, .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .form-group textarea {
      resize: none;
    }
    .form-group img {
      max-width: 100%;
      border-radius: 5px;
    }
    .form-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }
    .btn-save {
      background-color: #007bff;
      color: #fff;
    }
    .btn-cancel {
      background-color: #ddd;
      color: #333;
    }
    .btn:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>PerpusDig</h2>
      <a href="#">Beranda</a>
      <a href="#">E-Book</a>
      <a href="#">Buku</a>
      <a href="#">Data Anggota</a>
      <a href="#">Data Admin</a>
      <a href="#">Pengajuan Peminjaman</a>
      <a href="#">Riwayat Peminjaman</a>
    </div>
    <div class="content">
      <h1>Tambah Data</h1>
      <form>
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" id="judul" name="judul" placeholder="Masukkan judul buku">
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="number" id="jumlah" name="jumlah" placeholder="Masukkan jumlah buku">
        </div>
        <div class="form-group">
          <label for="isbn">ISBN</label>
          <input type="text" id="isbn" name="isbn" placeholder="Masukkan ISBN">
        </div>
        <div class="form-group">
          <label for="penulis">Penulis</label>
          <input type="text" id="penulis" name="penulis" placeholder="Masukkan nama penulis">
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" id="penerbit" name="penerbit" placeholder="Masukkan penerbit">
        </div>
        <div class="form-group">
          <label for="tahun">Tahun Terbit</label>
          <input type="number" id="tahun" name="tahun" placeholder="Masukkan tahun terbit">
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select id="kategori" name="kategori">
            <option value="">Pilih Kategori</option>
            <option value="fiksi">Fiksi</option>
            <option value="non-fiksi">Non-Fiksi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi Buku</label>
          <textarea id="deskripsi" name="deskripsi" rows="5" placeholder="Masukkan deskripsi buku"></textarea>
        </div>
        <div class="form-group">
          <label for="sampul">Unggah Sampul</label>
          <input type="file" id="sampul" name="sampul">
          <img src="cover-placeholder.jpg" alt="Sampul Buku">
        </div>
        <div class="form-buttons">
          <button type="submit" class="btn btn-save">Simpan</button>
          <button type="button" class="btn btn-cancel">Batal</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
