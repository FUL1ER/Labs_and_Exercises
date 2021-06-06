<?php

include 'Creature.php';

$cat_1 = new Creature("cat", "Snijok", "grey");
$cat_2 = new Creature("cat", "Barsik", "hakki");
$hemiechinus_auritus = new Creature("hemiechinus auritus", "Pushok", "black and white");

echo $cat_1->f_sey_hello();
echo $cat_2->f_sey_hello();
echo $hemiechinus_auritus->f_sey_hello();

echo $hemiechinus_auritus->f_get_base_class();