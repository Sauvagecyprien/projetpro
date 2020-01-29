<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\String_;

class TemplatedashController extends Controller
{


    // ici les accès au page de template dashboard
    // le code if Auth permet de savoir ton role ou de savoir si tu es connecter
    // ne pas se préocuper des if Auth il permettent de restreindre l'acces au page
    // le contenu de redirection et d'envoi de données se font dans le elseif


    public function dashboard()
    {
        if (Auth::guest() || Auth::user()->role != 'Admin') {

            return view('no_access');
        } elseif (Auth::user()->role == 'Admin') {

            $admin = User::where('role', '=', 'Admin')->count();
            $utilisateur = User::where('role', '=', 'User')->count();
            $enligne = Commentaire::where('etat', '=', 'valide')->count();
            $attente = Commentaire::where('etat', '=', 'attente')->count();


            return view('templatedashboard/dashboard', ['admin' => $admin, 'utilisateur' => $utilisateur, 'enligne' => $enligne, 'attente' => $attente]);
        }
    }

    public function table()
    {
        if (Auth::guest() || Auth::user()->role != 'Admin') {

            return view('no_access');
        } elseif (Auth::user()->role == 'Admin') {

            $users = User::all();
            return view('templatedashboard/table', ['users' => $users]);
        }
    }




// la fonction supprimer de lespace tableau utilisateur
        public function destroy($id)
        {

            if ( Auth::guest() || Auth::user()->role != 'Admin')
            {

                return view('no_access');
            }
            elseif (Auth::user()->role == 'Admin')
            {
                $users = User::where('id', $id)->first();
                $users->delete();

                $users = User::all();

                return redirect()->action('RolesController@index');
            }
        }





// ici la parti pour lespace tableau de commentaire

        public function user()
        {
            if ( Auth::guest() || Auth::user()->role != 'Admin'){

                return view('no_access');
            }
            elseif (Auth::user()->role == 'Admin')
            {



                $coms = Commentaire::where('etat', '=', 'valide')->get();
                $comatts = Commentaire::where('etat', '=', 'attente')->get();
            return view('templatedashboard/commentaire' , ['coms' => $coms , 'comatts' => $comatts] );

            }

    }


        public function delete($id)
        {
            if (Auth::guest() || Auth::user()->role != 'Admin') {

                return view('no_access');

            } elseif (Auth::user()->role == 'Admin') {
                $coms = Commentaire::where('id', $id)->first();
                $coms->delete();

                $coms = Commentaire::all();

                return redirect()->action('TemplatedashController@user');
            }

        }


        public function modif($id)
        {
            if (Auth::guest() || Auth::user()->role != 'Admin') {

                return view('no_access');
            } elseif (Auth::user()->role == 'Admin') {
                $coms = Commentaire::where('id', $id)->first();
                return view('templatedashboard/modif', ['coms' => $coms]);
                //   return view('produit/modif', ['products' => $products]);

            }
        }


        public function up(Request $request)
        {
            if (Auth::guest() || Auth::user()->role != 'Admin') {

                return view('no_access');
            } elseif (Auth::user()->role == 'Admin') {
                $this->validate($request, [
                    // pour faire en sorte qu'il y ai qu'un seul resultat mettre 'email'=> 'required|unique:post|max:255',
                    'contenu' => 'required|max:1000',
                ]);
                $com = Commentaire::find($request->id);
                $com->contenu = $request->contenu;
                $com->save();
                return redirect()->action('TemplatedashController@user');
            }
        }



    public function valider(Request $request)
        {
            if (Auth::guest() || Auth::user()->role != 'Admin') {

                return view('no_access');
            } elseif (Auth::user()->role == 'Admin') {
                $this->validate($request, [

                ]);
                $com = Commentaire::find($request->id);

                $com->etat = 'valide';

                $com->save();

                return redirect()->action('TemplatedashController@user');
            }
        }

        public function attente(Request $request)
        {
            if (Auth::guest() || Auth::user()->role != 'Admin') {

                return view('no_access');
            } elseif (Auth::user()->role == 'Admin') {
                $this->validate($request, [

                ]);
                $com = Commentaire::find($request->id);

                $com->etat = 'attente';

                $com->save();
                return redirect()->action('TemplatedashController@user');
            }
        }



    public function assignRoles(Request $request, $id)
    {

        if (Auth::guest() || Auth::user()->role != 'Admin') {

            return view('no_access');
        } elseif (Auth::user()->role == 'Admin') {


            $user = User::where('id', $id)->first();

            if ($request['role1']) {
                $user->role = $request->role1;
            }

            if ($request['role2']) {
                $user->role = $request->role2;
            }
            $user->save();

            return redirect()->action("TemplatedashController@table", ['id' => $id]);
        }

    }


}









