<?php include ('function.php'); ?>
<?php include ('pokemon.php'); ?>
<?php

$bulbizarre = new Pokemon ('Bulbizarre', 7, 'Plante', 65, 2);
$salameche = new Pokemon ('Salamèche', 9, 'Feu', 60, 55);
$carapuce = new Pokemon ('Carapuce', 8, 'Eau', 63, 48);
$pikachu = new Pokemon ('Pikachu', 10, 'Electrique', 58, 28);

$bulbizarre->pokedex();
// $bulbizarre->combat($salameche);
?>