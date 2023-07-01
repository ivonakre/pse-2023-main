<?php

namespace App\Http\Controllers;

use App\Models\Profesori;
use Illuminate\Http\Request;

class ProfesoriController extends Controller
{
    public function index()
    {
        return Profesori::all();
    }

    public function store(Request $request)
    {
        $profesori = new Profesori();
        $profesori->ime = $request->ime;
        $profesori->prezime = $request->prezime;
        $profesori->korisnicko_ime = $request->korisnicko_ime;
        $profesori->lozinka = $request->lozinka;
        $profesori->stalno_uposlen = $request->stalno_uposlen;
        $profesori->spol = $request->spol;
        $profesori->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $profesori = Profesori::find($request->id);
        $profesori->ime = $request->ime;
        $profesori->prezime = $request->prezime;
        $profesori->korisnicko_ime = $request->korisnicko_ime;
        $profesori->lozinka = $request->lozinka;
        $profesori->stalno_uposlen = $request->stalno_uposlen;
        $profesori->spol = $request->spol;
        $profesori->save();;

        return 'Uređeno';
    }

    public function destroy($id) {
        Profesori::find($id)->delete();

        return 'Izbrisano';
    }
}