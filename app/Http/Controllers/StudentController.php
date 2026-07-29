<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Dsadhabdhabdjabdwhabdajwbdhajwbdwhabdhawbdawhbdahwbhawbvgahbjnkjkbhvguhibnojkhvguygijnkbhvguygihbjhgvuygyvugvh vvgvyvgh vvgh vuyuvghvuyvgvv hguvughvuyvgvuygyuvata Siswa";

        return view ('Students.index');
    }

    public function show(string $id)
    {
        return view ('Students.show');
    }

    public function create()
    {
        return view ('Students.create');
    }

    public function edit(string $id)
    {
        return view ('Students.edit');
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
