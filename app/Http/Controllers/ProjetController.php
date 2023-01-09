<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    /**
     * Affiche la liste des projets
     */
    public function index()
    {

        $projets = Projet::all();
        return view('projet.index', compact('projets'));

    }


    /**
     * return le formulaire de créationcreation d'un projet
     */
    public function create()
    {

        return view('projet.create');

    }


    /**
     * Enregistre un nouveau projet dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'description'=> 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required'
        ]);


        $projet = new projet([
            'nom' => $request->get('nom'),
            'description' => $request->get('description'),
            'dateDebut' => $request->get('dateDebut'),
            'dateFin' => $request->get('dateFin')
        ]);


        $projet->save();
        return redirect('/')->with('success', 'Projet Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un projet spécifique
     */

    public function show($id)
    {

        $projet = projet::findOrFail($id);
        return view('projet.show', compact('projet'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $projet = projet::findOrFail($id);

        return view('projet.edit', compact('projet'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom'=>'required',
            'description'=> 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required'

        ]);




        $projet = projet::findOrFail($id);
        $projet->nom = $request->get('nom');
        $projet->description = $request->get('description');
        $projet->dateDebut = $request->get('dateDebut');
        $projet->dateFin = $request->get('dateFin');


        $projet->update();

        return redirect('/')->with('success', 'Projet Modifié avec succès');

    }




    /**
     * Supprime le projet dans la base de données
     */
    public function destroy($id)
    {

        $projet = projet::findOrFail($id);
        $projet->delete();

        return redirect('/')->with('success', 'Projet Supprime avec succès');

    }
}
