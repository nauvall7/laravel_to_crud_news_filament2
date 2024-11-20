<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // ambil data dari DB -> M V C
        $news = News::all(); // select * from news;
        return view('news.index', ['news' => $news]);
    }
}