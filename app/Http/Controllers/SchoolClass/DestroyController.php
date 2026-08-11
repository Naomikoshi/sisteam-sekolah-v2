<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $schoolClass = SchoolClass::findOrFail($id);
        $schoolClass->delete();

        return redirect()->route('classes.index');
    }
}
