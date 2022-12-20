<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $actualDay = today();
        // dd($actualDay->format('Y-m-d'));
        // $trains = Train::all();

        $trains = Train::where('ora_partenza', '>=', $actualDay->format('Y-m-d'))->get();
        // dd($trains, $actualDay);
        return view('trains.index', compact('trains', 'actualDay'));
    }
}
