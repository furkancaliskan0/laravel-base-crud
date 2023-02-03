<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {

        $saints = Saint::orderBy('created_at', 'DESC')->get();

        $data = [
            'saints' => $saints
        ];

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



}