<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saint;
class MainController extends Controller
{
    public function home(){

        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }

    // funzione per singolo santo che stampa info dedicata al santo:
    public function show($id){

        $saint = Saint::find($id);

        $data= [
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }

    // funzione per eliminare il santo: 
    public function saintDestroy($id){

        $saint = Saint::find($id);

        $saint->delete();

        return redirect()->route('home');
    }
}
