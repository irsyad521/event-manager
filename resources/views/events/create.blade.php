<!DOCTYPE html>
<html>
<head>
    <title>Tambah Acara</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('about') }}">Tentang Kami</a>
        <a href="{{ route('faq') }}">FAQ</a>
        <a href="{{ route('events.index') }}">Kelola Acara</a>
    </nav>
    <div class="container">
        <h1>Tambah Acara</h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
            
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>
            
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>
            
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" required>
            
            <button type="submit">Simpan</button>
        </form>
    </div>
    <footer>
        &copy; 2024 Manajer Acara
    </footer>
</body>
</html>
