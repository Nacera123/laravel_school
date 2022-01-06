<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Formation;

class FormationController extends Controller
{
    public function detail_formation($id){

        $formation = Formation::find($id);

        return view('formation', compact('formation'));

    }


    public function formationall(){

        $formationList = Formation::all();
        return view('formation', compact('formationList'));

    }
}
