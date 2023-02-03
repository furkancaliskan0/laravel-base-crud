<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {

        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }





}