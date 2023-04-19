<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $types = [
            'corta' => 'Corta',
            'cortissima' => 'Cortissima',
            'lunga' => 'Lunga',
            'brodo' => 'Brodo',
            'giganti' => 'Enormi'
        ];

        return view('pastas.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255|min:3',
            'src' => 'required|max:255|url',
            'type' => [
                'required',
                Rule::in(['corta', 'cortissima', 'lunga', 'brodo']) //controllare che sia lunga,corta o cortissima
            ],
            'cooking_time' => 'required|max:20',
            'weight' => 'required|max:20',
            'description' => 'nullable|string'
        ]);

        // $data = $request->all();

        // $new_pasta = new Pasta();

        // $new_pasta->title = $data['title'];
        // $new_pasta->src = $data['src'];
        // $new_pasta->type = $data['type'];
        // $new_pasta->cooking_time = $data['cooking_time'];
        // $new_pasta->weight = $data['weight'];
        // $new_pasta->description = $data['description'];

        // $new_pasta->save();
        $new_pasta = Pasta::create($data);

        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('pastas.show', $new_pasta);
    }

    public function edit(Pasta $pasta)
    {
        return view('pastas.edit', compact('pasta'));
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|max:255|min:3',
            'src' => 'required|max:255|url',
            'type' => [
                'required',
                Rule::in(['corta', 'cortissima', 'lunga', 'brodo'])
            ],
            'weight' => ['required', 'max:20'],
            'cooking_time' => 'required|max:20',
            'description' => 'nullable|string'
        ]);
    }

    public function update(Request $request, Pasta $pasta)
    {
        // dd($pasta, $request->all());
        // $data = $request->all();
        // $data = $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'src' => 'required|max:255|url',
        //     'type' => [
        //         'required',
        //         Rule::in(['corta', 'cortissima', 'lunga', 'brodo'])
        //     ],
        //     'weight' => ['required', 'max:20'],
        //     'cooking_time' => 'required|max:20',
        //     'description' => 'nullable|string'
        // ]);

        $data = $this->validation($request);

        // $pasta->update($data);
        // $pasta->title = $data['title'];
        // $pasta->src = $data['src'];
        // $pasta->type = $data['type'];
        // $pasta->description = $data['description'];
        // $pasta->weight = $data['weight'];
        // $pasta->cooking_time = $data['cooking_time'];

        // $pasta->fill($data);

        // $pasta->save();
        $pasta->update($data);

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
