<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $result = Http::get("https://www.googleapis.com/books/v1/volumes?q={$keyword}");
        return redirect('/book/index')->with('result', $result->json()['items']);
    }

    public function index(Request $request)
    {
        return view('book.index')->with('result', session('result'));
    }

    public functio

    // public function show($id)
    // {
    //     $result = Http::get("https://www.googleapis.com/books/v1/volumes?q={$id}");
    //     return view('book.show')->with('element', $result->json()['items']);
    // }
}
