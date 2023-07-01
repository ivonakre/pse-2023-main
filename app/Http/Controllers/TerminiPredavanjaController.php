<?php

namespace App\Http\Controllers;

use App\Models\TerminPredavanja;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TerminiPredavanjaController extends Controller
{
    public function index()
    {
        return TerminPredavanja::with('ucionica', 'predmeti')->get();
    }

    public function store(Request $request)
    {
        $terminpredavanja = new TerminPredavanja();
        $terminpredavanja->satnica = $request->satnica;
        $terminpredavanja->ucionica_id = $request->ucionica_id;
        $terminpredavanja->predmet_id = $request->predmet_id;
        $terminpredavanja->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $terminpredavanja = TerminPredavanja::find($request->id);
        $terminpredavanja->satnica = $request->satnica;
        $terminpredavanja->ucionica_id = $request->ucionica_id;
        $terminpredavanja->predmet_id = $request->predmet_id;
        $terminpredavanja->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        TerminPredavanja::find($id)->delete();

        return 'Izbrisano';
    }
}