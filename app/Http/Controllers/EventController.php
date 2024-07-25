<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Menampilkan daftar acara
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Menampilkan form untuk membuat acara baru
    public function create()
    {
        return view('events.create');
    }

    // Menyimpan acara baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Acara berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit acara
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Memperbarui acara di database
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Acara berhasil diperbarui.');
    }

    // Menghapus acara dari database
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Acara berhasil dihapus.');
    }
}
