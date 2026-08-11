<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'homeroom_teacher' => 'required|string|max:255',
        ]);

        SchoolClass::create($validated);

        return redirect()->route('classes.index');
    }
}
