<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $schoolClass = SchoolClass::findOrFail($id);
        $title = 'Sistem Sekolah - Detail Kelas';

        return view('classes.show', [
            'title' => $title,
            'schoolClass' => $schoolClass,
        ]);
    }
}
