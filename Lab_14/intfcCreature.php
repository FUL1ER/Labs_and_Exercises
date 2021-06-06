<?php

interface iCreature
{
    public function f_set_color($color);

    public function f_set_name($name);

    public function f_get_kind();

    public function f_get_name();

    public function f_get_color();

    public static function f_get_base_class();

    public function f_sey_hello();
}