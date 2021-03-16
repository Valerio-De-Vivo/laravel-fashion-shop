<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dress;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function shop(){
        $dresses = dress::all();

        $data = [
            'dresses' => $dresses
        ];
        return view('shop', $data);
    }

    public function contatti(){
        return view('contatti');
    }
}
