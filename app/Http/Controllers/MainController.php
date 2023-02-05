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

    // metodo per dettagli singolo santo:
    public function show($id){

        $saint = Saint::find($id);

        $data= [
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }

    // metodo per eliminazione santo: 
    public function saintDestroy($id){

        $saint = Saint::find($id);

        $saint->delete();

        return redirect()->route('home');
    }

    // metodo per creazione santo: 
    public function saintCreate(){
        return view('pages.saintCreate');
    }

    // metodo per portare dati inseriti dall'utente nel controller:
    public function saintStore(Request $request){
        $data = $request->all();

        $saint = new Saint();

        $saint->nome = $data['nome'];
        $saint->luogoNascita = $data['luogoNascita'];
        $saint->dataBenedizione = $data['dataBenedizione'];
        $saint->numeroMiracoli = $data['numeroMiracoli'];

        $saint->save();

        return redirect()->route('home');
    }
}
