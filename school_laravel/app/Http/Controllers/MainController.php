<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Formation;
use App\Models\Utilisateur;
use App\Models\Compte;



class MainController extends Controller
{
    // public function crud_users(){

    //     return view('users');
    // }


    public function formationcrud(){

        $formationList = Formation::all();

        $utilisateurList = Utilisateur::all();

        $compteList = Compte::all();

        return view('users', compact('formationList', 'utilisateurList', 'compteList'));

    }


    public function delete_formation($id){

        Formation::where('id_formation', $id)->delete();

        return redirect()->route('users')->with('success Delete', 'la formation a bien été supprimée');

    }

    
    public function delete_compte($id){

        Compte::where('id_compte', $id)->delete();

        return redirect()->route('users')->with('success Delete compte', 'le compte a bien été supprimé');

    }

    public function delete_utilisateur($id){

        Utilisateur::where('id_utilisateur', $id)->delete();

        return redirect()->route('users')->with('success Delete utilisateur', "l'utilisateur a bien été supprimé");

    }
}
