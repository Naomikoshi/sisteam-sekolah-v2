<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    private function classes(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major_id' => 1,
                'teacher_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XI',
                'major_id' => 2,
                'teacher_id' => 2,
            ],
        ];
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $schoolClass = collect($this->classes())->firstWhere('id', (int) $id);
        $title = 'Sistem Sekolah - Edit Kelas';

        $majors = [
            ['id' => 1, 'name' => 'AKL'],
            ['id' => 2, 'name' => 'TKJ'],
            ['id' => 3, 'name' => 'BD'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.edit', [
            'title' => $title,
            'schoolClass' => $schoolClass,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }
}
