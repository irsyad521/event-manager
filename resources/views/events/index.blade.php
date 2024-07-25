<!DOCTYPE html>
<html>
<head>
    <title>Daftar Acara</title>
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
        <h1>Daftar Acara</h1>
        <a href="{{ route('events.create') }}">Tambah Acara</a>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->judul }}</td>
                        <td>{{ $event->deskripsi }}</td>
                        <td>{{ $event->tanggal }}</td>
                        <td>{{ $event->lokasi }}</td>
                        <td class="actions">  
                            <a href="{{ route('events.edit', $event->id) }}" class="button">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer>
        &copy; 2024 Manajer Acara
    </footer>
</body>
</html>
