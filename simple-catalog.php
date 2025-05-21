<?php
$products = [
    "Dés_métal",
    "Dés_résine",
    "Warhammer_Le_Jeu_De_Rôle",
    "Warhammer_Fantasy",
    "potions",
    "plateaux_modulaires",
    "pièces_d_or_factices",
    "sceaux",
    "parchemins",
    "figurines",
    "cartes"
];

sort($products);
echo $products[0];

echo $products[count($products) - 1];
