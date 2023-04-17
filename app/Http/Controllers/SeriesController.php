<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        // NÃO USAR NUNCA echo DENTRO DE UM CONTROLLER
        // echo $html;

        // Retorna uma resposta no console, podemos passar alguns Headers também dentro dessa response
        //return response($html, status:201);

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return to_route('series.index')->with('mensagem.sucesso', "Serie '$serie->nome' Adicionada com Sucesso!!!");
    }

    public function destroy(Serie $series, SeriesFormRequest $request)
    {
        //dd($request->id);
        //Serie::destroy($request->id);
        //$request->session()->flash('mensagem.sucesso', "Serie Removida com Sucesso");
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso', "Serie Removida com Sucesso");;
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->nome = $request->nome;
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Serie '$series->nome' Atualizada com Sucesso!!!");
    }
}
