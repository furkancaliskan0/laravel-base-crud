<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // --- INDEX
    public function home()
    {

        $saints = Saint::orderBy('created_at', 'DESC')->get();

        // $data = [
        //     'saints' => $saints
        // ];

        // return view('pages.home', $data);
        return view('pages.home', compact('saints'));
    }
    // --- SHOW
    public function saintShow($id)
    {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
    }

    // --- DELETE
    public function saintDestroy($id)
    {

        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('home');
    }
    // --- CREATE
    public function saintCreate()
    {

        return view('pages.saintCreate');
    }

    public function saintStore(Request $request)
    {

        $data = $request->all();

        $saint = new Saint();

        $saint->nome = $data['nome'];
        $saint->data_benedizione = $data['data_benedizione'];
        $saint->luogo_di_nascita = $data['luogo_di_nascita'];
        $saint->numero_miracoli = $data['numero_miracoli'];

        $saint->save();

        return redirect()->route('home');
    }




}