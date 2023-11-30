<?php

use Ynov\Pokedex\Router;
use Ynov\Pokedex\Controllers\PokemonController;

$router = new Router();

$router->addRoute('/', PokemonController::class, 'index');