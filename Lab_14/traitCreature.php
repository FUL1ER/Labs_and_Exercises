<?php

trait funcOfCreature
{
    public function f_set_color($color) { $this->color = $color; }

    public function f_set_name($name) { $this->name = $name; }

    public function f_get_kind() { return $this->kind; }

    public function f_get_name() { return $this->name; }

    public function f_get_color() { return $this->color; }

    public static function f_get_base_class() { return self::$base_class;}

    public function f_sey_hello() { echo "Hi, my friends call me " . $this->name . " and I`m a" . $this->color . " and so I " . $this->kind . "of a kind<br>"; }
}