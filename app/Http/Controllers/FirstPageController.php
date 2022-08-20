<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function index()
    {
        return view('home.index',[
            'kordinats' => Peta::get()
        ]);
    }

    public function show(Peta $peta)
    {
        return view('home.show',[
            'maps' => Peta::find($peta)
        ]);
    }
}
