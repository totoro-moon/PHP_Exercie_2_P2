<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 2 </title>
</head>
<body>
    <h1># Exercice 2</h1>
<p>Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100.
Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.
</p>
<!-- boucle while <?php
$n = 0;
$aleatoire = rand(1,100);
 echo '<p> nombre aleatoire : '.$aleatoire.'</p>';

while ($n <=20){
    echo '<p> le resultat est : '.($n * $aleatoire).'</p>';
    $n++;
}
?> -->
<!-- boucle for -->

<?php
$aleatoire = rand(1,100);
for($n = 0; $n <= 20; $n++){
    ?>
    <p><?= 'Ma première variable vaut : '. $n ?></p>
    <p><?= 'Ma seconde variable aléatoire vaut: '.$aleatoire ?></p>
   <p><?= 'le resultat est : '. $n * $aleatoire ?></p>
<?php 
}
?>

</body>
</html>