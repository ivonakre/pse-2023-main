<?php

namespace App\Http\Controllers;

use App\Models\TerminiPredavanja;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TerminiPredavanjaController extends Controller
{
    public function index()
    {
        return TerminiPredavanja::with('ucionica', 'predmeti')->get();
    }

    public function store(Request $request)
    {
        $terminipredavanja = new TerminPredavanja();
        $terminipredavanja->satnica = $request->satnica;
        $terminipredavanja->ucionica_id = $request->ucionica_id;
        $terminipredavanja->predmet_id = $request->predmet_id;
        $terminipredavanja->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $terminipredavanja = TerminiPredavanja::find($request->id);
        $terminipredavanja->satnica = $request->satnica;
        $terminipredavanja->ucionica_id = $request->ucionica_id;
        $terminipredavanja->predmet_id = $request->predmet_id;
        $terminipredavanja->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        TerminiPredavanja::find($id)->delete();

        return 'Izbrisano';
    }
}