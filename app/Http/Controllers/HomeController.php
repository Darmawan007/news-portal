<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data yang diperlukan
        $mainNews = News::latest()->take(4)->get();
        $highlights = News::where('is_highlighted', true)->take(3)->get();
        $miniNews = News::latest()->take(8)->get();

        // Kirim data ke view
        return view('home', [
            'mainNews' => $mainNews,
            'highlights' => $highlights,
            'miniNews' => $miniNews,
            'title' => 'Home',
        ]);
    }
}
