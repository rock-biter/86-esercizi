<?php

namespace App\Http\Controllers;

use App\Models\Treno;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function index()
    {

        $trains = Treno::where('departure_time', '>=', now())->get();

        $data = [
            'trains' => $trains
        ];

        return view('trains.index', $data);
    }
}
