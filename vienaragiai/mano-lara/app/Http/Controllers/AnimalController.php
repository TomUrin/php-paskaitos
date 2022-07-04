<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function barsukas(Request $request)
    {
        dump($request->kiekis);
        return 'Valio barsukams';
    }

    public function briedis(Request $request, $id)
    {
        dump($id);
        return 'Valio briedziams';
    }
}
