<!DOCTYPE html>
<html>
<head>
    <title>Edit Acara</title>
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
        <h1>Edit Acara</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" value="{{ $event->judul }}" required>
            
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required>{{ $event->deskripsi }}</textarea>
            
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ $event->tanggal }}" required>
            
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ $event->lokasi }}" required>
            
            <button type="submit">Update</button>
        </form>
    </div>
    <footer>
        &copy; 2024 Manajer Acara
    </footer>
</body>
</html>
