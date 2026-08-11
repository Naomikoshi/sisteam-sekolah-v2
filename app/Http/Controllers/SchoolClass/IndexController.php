<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = 'Sistem Sekolah - Daftar Kelas';
        $classes = SchoolClass::all();

        return view('classes.index', [
            'title' => $title,
            'classes' => $classes,
        ]);
    }
}
