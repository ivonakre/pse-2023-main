<?php

namespace App\Http\Controllers;

use App\Models\Predmeti;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PredmetiController extends Controller
{
    public function index()
    {
        return Predmeti::with('profesori')->get();
    }

    public function store(Request $request)
    {
        $predmeti = new Predmeti();
        $predmeti->naziv = $request->naziv;
        $predmeti->opis = $request->opis;
        $predmeti->profesor_id = $request->profesor_id;
        $predmeti->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $predmeti = Predmeti::find($request->id);
        $predmeti->naziv = $request->naziv;
        $predmeti->opis = $request->opis;
        $predmeti->profesor_id = $request->profesor_id;
        $predmeti->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Predmeti::find($id)->delete();

        return 'Izbrisano';
    }
}