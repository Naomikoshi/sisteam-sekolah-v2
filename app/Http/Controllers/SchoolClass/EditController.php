<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $schoolClass = SchoolClass::findOrFail($id);
        $title = 'Sistem Sekolah - Edit Kelas';

        return view('classes.edit', [
            'title' => $title,
            'schoolClass' => $schoolClass,
        ]);
    }
}
