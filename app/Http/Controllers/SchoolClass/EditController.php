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
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah',
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

        return view('classes.edit', [
            'title' => $title,
            'schoolClass' => $schoolClass,
        ]);
    }
}
