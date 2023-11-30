<?php

namespace Ynov\Pokedex\Models;

class Pokemon {
    public $name;
    public $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }
}