<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    private function majors(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';

        return view('majors.index', [
            'title' => $title,
            'majors' => $this->majors(),
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Jurusan';

        return view('majors.create', [
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        return 'Menambahkan data jurusan baru';
    }

    public function show(string $major)
    {
        $majorData = collect($this->majors())->firstWhere('id', (int) $major);
        $title = 'Sistem Sekolah - Detail Jurusan';

        return view('majors.show', [
            'title' => $title,
            'major' => $majorData,
        ]);
    }

    public function edit(string $major)
    {
        $majorData = collect($this->majors())->firstWhere('id', (int) $major);
        $title = 'Sistem Sekolah - Edit Jurusan';

        return view('majors.edit', [
            'title' => $title,
            'major' => $majorData,
        ]);
    }

    public function update(Request $request, string $major)
    {
        return "Memperbarui data jurusan dengan id : {$major}";
    }

    public function destroy(string $major)
    {
        return "Menghapus data jurusan dengan id : {$major}";
    }
}
