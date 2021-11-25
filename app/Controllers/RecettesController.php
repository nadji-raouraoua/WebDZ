<?php

namespace App\Controllers;

class RecettesController extends BaseController
{
    public function index()
    {
        // Rassembler toutes les données utilisées par la vue dans un tableau $data
        $data = [
            'titre_page' => "Mes recettes",
            'sous_titre_page' => "Je vous présente mes recettes favorites...",
            'recettes' => $this->_donnees_bidon(),
        ];

        /* Chacun des items du tableau $data sera accessible dans la vue
         * par des variables portant le même nom que la clé :
         * $titre_page, $sous_titre_page et $recettes
         */
        return view('liste_recettes', $data);
    }

    /**
     * Données bidon en attendant de créer le modèle et la base de données.
     */
    private function _donnees_bidon()
    {
        return [
            [
                'titre' => "Eau bouillante",
                'ingredients' => ["Eau fraîche"],
                'instructions' => "Mettre l'eau dans un chaudron et faire bouillir."
            ],
            [
                'titre' => "Thé",
                'ingredients' => ["Eau fraîche", "Poche de thé"],
                'instructions' => "Préparez la recette d'eau bouillante. Mettre l'eau dans une tasse, ajoutez la poche de thé et laissez infuser quelques minutes."
            ],
            [
                'titre' => "Verre d'eau",
                'ingredients' => ["Eau fraîche", "Glaçons", "Tranche de citron (facultatif)"],
                'instructions' => "Mettre des glaçons dans un grand verre et remplir d'eau. Ajoutez une tranche de citron si désiré."
            ],
        ];
    }
}
