<?php

namespace Ynov\Pokedex\Controllers;

use Ynov\Pokedex\Controller;
use Ynov\Pokedex\Models\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = [
            new Pokemon('Bulbizarre', 'Plante'),
            new Pokemon('Salamèche', 'Feu')
        ];

        $this->render('pokemon/index', ['pokemons' => $pokemons]);
    }
}