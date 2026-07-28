<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id) {
        return "Menampilkan detail siswa dengan id : {$id}";
    }

    public function create() {
        return "ini adalah halaman tambah siswa";
    }

    public function edit(string $id) {
        return "ini adalah halaman edit siswa dengan id : {$id}";
    }

    public function store () {
        return "Menambah data siswa baru";
    }

    public function update(string $id) {
        return "Memperbarui data siswa dengan id : {$id}";
    }

    public function destroy(string $id) {
        return "Menghapus data siswa dengan id : {$id}";
    }
}
