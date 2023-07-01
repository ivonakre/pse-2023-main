<?php

namespace App\Http\Controllers;

use App\Models\Predmet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PredmetiController extends Controller
{
    public function index()
    {
        return Predmet::with('profesor')->get();
    }

    public function store(Request $request)
    {
        $predmet = new Predmet();
        $predmet->naziv = $request->naziv;
        $predmet->opis = $request->opis;
        $predmet->profesor_id = $request->profesor_id;
        $predmet->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $predmet = Predmet::find($request->id);
        $predmet->naziv = $request->naziv;
        $predmet->opis = $request->opis;
        $predmet->profesor_id = $request->profesor_id;
        $predmet->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Predmet::find($id)->delete();

        return 'Izbrisano';
    }
}