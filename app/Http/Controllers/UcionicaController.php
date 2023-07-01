<?php

namespace App\Http\Controllers;

use App\Models\Ucionica;
use Illuminate\Http\Request;

class UcionicaController extends Controller
{
    public function index()
    {
        return Ucionica::all();
    }

    public function store(Request $request)
    {
        $ucionica = new Ucionica();
        $ucionica->naziv = $request->naziv;
        $ucionica->vrsta = $request->vrsta;
        $ucionica->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $ucionica = Ucionica::find($request->id);
        $ucionica->naziv = $request->naziv;
        $ucionica->vrsta = $request->vrsta;
        $ucionica->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ucionica::find($id)->delete();

        return 'Izbrisano';
    }
}