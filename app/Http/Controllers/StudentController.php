<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    private function students(): array
    {
        return [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
                'gender' => 'Laki-laki',
            ],
            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL',
                'gender' => 'Laki-laki',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';

        return view('students.index', [
            'title' => $title,
            'students' => $this->students(),
        ]);
    }

    public function show(string $id)
    {
        $student = collect($this->students())->firstWhere('id', (int) $id);
        $title = 'Sistem Sekolah - Detail Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';

        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function edit(string $id)
    {
        $student = collect($this->students())->firstWhere('id', (int) $id);
        $title = 'Sistem Sekolah - Edit Siswa';

        return view('students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function store()
    {
        return 'Menambah data siswa baru';
    }

    public function update(string $id)
    {
        return "Memperbarui data siswa dengan id : {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan id : {$id}";
    }
}
