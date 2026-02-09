<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public $notes = [
        "Mohamed Alaoui" => "16",
        "Ahmed Bennani" => "14",
        "Rachida kich" =>
            "6",
        "Aicha Saaoudi" => "19",
        "Noura Alaoui" => "7",
        "Samar Rhaoussi" => "13",
        "Aicha Siraj" => "10",
        "Samiha Hakim" => "09",
        "Mohamed Rami" => "17",
        "Sami Tazi"
        => "7",
        "Noura Tazi" => "14"
    ];

    public function index()
    {
        $notes = $this->notes;

        if (session()->has('result')) {
            $notes = session('result');
        }

        return view('noteEtudiants', compact('notes'));
    }
    public function Rechercher(Request $request)
    {

        $result = [];
        $nomRechercher = $request->txtRech;

        $notes = $this->notes;

        foreach ($notes as $nom => $note) {
            if (preg_match("/$nomRechercher/i", $nom)) {
                $result[$nom] = $note;
            }

        }

        return redirect()->route("all")->with('result', $result)->withInput();

    }
}


