<?php

abstract class abstrCreature
{
    abstract protected function f_set_color($color);

    abstract protected function f_set_name($name);

    abstract protected function f_get_kind();

    abstract protected function f_get_name();

    abstract protected function f_get_color();

    abstract protected static function f_get_base_class();

    abstract protected function f_sey_hello();
}