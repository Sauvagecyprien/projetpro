<?php

namespace App\Http\Controllers;
use App\Commentaire;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    //
    public function index(){
        return view('home/index');
    }

    public function petitcommerce(){
        return view('home/petitcommerce');
    }

    public function comment(){

        $coms = Commentaire::where('parent_id', '=', null)->select()->get();
        $enfant = Commentaire::where('parent_id', '!=', null)->select()->get();



        return view('home/commentaires' , ['commentaires' => $coms, 'enfants' => $enfant]);

    }


    public function create(Request $request)
    {

        $contenu = new Commentaire;
        $this->validate($request, [
            'contenu' => 'required|max:1000',

        ]);


        $contenu->contenu = $request->contenu;
        $contenu->user_id = $request->id;
        $contenu->etat = 'attente';

        $contenu->save();


        return redirect()->action('VisiteurController@comment');

    }


    // les fonctions d'acces au galeries

    public function galerie(){
        return view('galerie/galerie');
    }
    public function paysage(){
        return view('galerie/paysage');
    }

































}
