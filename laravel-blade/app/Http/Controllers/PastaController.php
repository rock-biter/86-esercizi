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

    public function store(Request $request)
    {
        $data = $request->all();

        $new_pasta = new Pasta();

        $new_pasta->title = $data['title'];
        $new_pasta->src = $data['src'];
        $new_pasta->type = $data['type'];
        $new_pasta->cooking_time = $data['cooking_time'];
        $new_pasta->weight = $data['weight'];
        $new_pasta->description = $data['description'];

        $new_pasta->save();

        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('pastas.show', $new_pasta);
    }

    public function edit(Pasta $pasta)
    {
        return view('pastas.edit', compact('pasta'));
    }

    public function update(Request $request, Pasta $pasta)
    {
        // dd($pasta, $request->all());
        $data = $request->all();

        // $pasta->update($data);
        $pasta->title = $data['title'];
        $pasta->src = $data['src'];
        $pasta->type = $data['type'];
        $pasta->description = $data['description'];
        $pasta->weight = $data['weight'];
        $pasta->cooking_time = $data['cooking_time'];

        $pasta->save();

        return to_route('pastas.show', $pasta);
    }

    public function destroy(Pasta $pasta)
    {

        // dd($pasta);
        $pasta->delete();

        return to_route('pastas.index');
    }

    public function destroyAll()
    {
        $pastas = Pasta::all();
        $ids = $pastas->pluck('id');

        // dd($ids);
        // Pasta::truncate();
        Pasta::destroy($ids);

        return to_route('pastas.index');
    }
}
