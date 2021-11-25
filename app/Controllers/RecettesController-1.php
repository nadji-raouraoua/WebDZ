<?php

namespace App\Controllers;

use App\Libraries\MesRecettes;

class RecettesController extends BaseController
{
    public function index()
    {
        // Créer une instance de notre librairie
        $mesRecettes = new MesRecettes();

        // Rassembler toutes les données utilisées par la vue dans un tableau $data
        $data = [
            'titre_page' => "Mes recettes",
            'sous_titre_page' => "Je vous présente mes recettes favorites...",
            'recettes' => $mesRecettes->getToutesLesRecettes(),
        ];

        /* Chacun des items du tableau $data sera accessible dans la vue 
         * par des variables portant le même nom que la clé :
         * $titre_page, $sous_titre_page et $recettes
         */
        return view('liste_recettes', $data);
    }
}
