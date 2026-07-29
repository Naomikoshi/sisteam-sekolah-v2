<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('students.index');
    }

    public function show(string $id) {
        return view('students.show');
    }

    public function create() {
        return view('students.create');
    }

    public function edit(string $id) {
        return view('students.edit');
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
