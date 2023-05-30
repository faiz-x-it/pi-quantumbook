<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\photos_category;
use Illuminate\Http\Request;

class CategoryCon extends Controller
{
    public function index()
    {
        return view('/categories', [
            "judul" => "Blog Categories",
            "kategori" => photos_category::all()->collect()
        ]);
    }

    public function show(photos_category $kategori)
    {
        return view('galeri', [
            "judul" => "Blog Categories | $kategori->name",
            'blogs' => $kategori->blogs->load(['author', 'kategori'])
        ]);
    }
}
