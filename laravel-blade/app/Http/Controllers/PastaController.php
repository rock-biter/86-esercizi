<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index()
    {

        $pastas = Pasta::all();
        $page_title = 'Elenco Paste';

        // $data = [
        //     'pastas' => $pastas,
        //     'page_title'=> $page_title
        // ];

        // $data = compact('pastas');

        return view('pastas.index', compact('pastas', 'page_title'));
    }


    public function show(Pasta $pasta)
    {
        // $pasta = Pasta::findOrFail($id);
        return view('pastas.show', compact('pasta'));
    }

    public function create()
    {
        return view('pastas.create');
    }
}
