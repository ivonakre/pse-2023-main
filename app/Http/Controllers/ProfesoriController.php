<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoriController extends Controller
{
    public function index()
    {
        return Profesor::all();
    }

    public function store(Request $request)
    {
        $profesor = new Profesor();
        $profesor->ime = $request->ime;
        $profesor->prezime = $request->prezime;
        $profesor->korisnicko_ime = $request->korisnicko_ime;
        $profesor->lozinka = $request->lozinka;
        $profesor->stalno_uposlen = $request->stalno_uposlen;
        $profesor->spol = $request->spol;
        $profesor->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $profesor = Profesor::find($request->id);
        $profesor->ime = $request->ime;
        $profesor->prezime = $request->prezime;
        $profesor->korisnicko_ime = $request->korisnicko_ime;
        $profesor->lozinka = $request->lozinka;
        $profesor->stalno_uposlen = $request->stalno_uposlen;
        $profesor->spol = $request->spol;
        $profesor->save();;

        return 'Uređeno';
    }

    public function destroy($id) {
        Profesor::find($id)->delete();

        return 'Izbrisano';
    }
}