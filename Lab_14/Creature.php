<?php

include 'traitCreature.php';
include 'abstrCreature.php';
include 'intfcCreature.php';

class Creature extends abstrCreature implements iCreature
{
    private $color;
    private $name;
    private $kind;
    private static $base_class = "abstrCreature";

    public function __construct($kind, $name, $color) {
        $this->kind = $kind;
        $this->name = $name;
        $this->color = $color;
    }

    use funcOfCreature;
}