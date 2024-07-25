<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
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
        <h1>Selamat Datang di Manajer Acara</h1>
        <p>Selamat datang di aplikasi Manajer Acara. Aplikasi ini membantu Anda mengelola acara Anda dengan efisien. Anda dapat menambahkan, mengedit, dan menghapus acara, serta melacak semua tanggal dan detail penting di satu tempat.</p>
        <p>Tujuan kami adalah membuat manajemen acara semudah mungkin untuk Anda. Apakah Anda merencanakan pertemuan kecil atau konferensi besar, Manajer Acara memiliki alat yang Anda butuhkan untuk berhasil.</p>
    </div>
    <footer>
        &copy; 2024 Manajer Acara
    </footer>
</body>
</html>
