<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        return 'Ini adalah halaman daftar jurusan';
    }

    public function create()
    {
        return 'Ini adalah halaman tambah jurusan';
    }

    public function store(Request $request)
    {
        return 'Menambahkan data jurusan baru';
    }

    public function show(string $id)
    {
        return "Menampilkan detail jurusan dengan id : {$id}";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman edit jurusan dengan id : {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "Memperbarui data jurusan dengan id : {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan dengan id : {$id}";
    }
}
