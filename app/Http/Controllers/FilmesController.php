<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index()
    {
        $filmes = [
            'Vingadores',
            'Thor',
            'Hulk'
        ];

        return view('Filmes.index')->with('filmes', $filmes);
    }

    public function create()
    {
        return view('Series.create');
    }
}
