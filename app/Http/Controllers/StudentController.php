<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '000001',
                'name' => "John Doe",
                'class' => '12 TKJ 3',
                'major' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 2,
                'nis' => '000002',
                'name' => "John Does",
                'class' => '12 TKJ 3',
                'major' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'nis' => '000003',
                'name' => "John Doed",
                'class' => '12 TKJ 3',
                'major' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 4,
                'nis' => '000004',
                'name' => "John Doeng",
                'class' => '12 TKJ 3',
                'major' => 'Teknik Komputer dan Jaringan',
            ],
        ];


        return view ('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view ('students.show',[
            'title' => $title
        ]);
    }

    public function create()
    {
        return view ('students.create');
    }

    public function edit(string $id)
    {
        return view ('students.edit');
    }

    public function store(Request $request)
    {
        return"Edit Siswa";
    }

    public function destroy(string $id)
    {
        return"Hapus Akun Siswa ID: {$id}";
    }

}
