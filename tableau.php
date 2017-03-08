<!DOCTYPE html>
<html>
<head>
	<title>exercice5</title>
</head>
<body>
<?php
//exercice1
//creer un un tableau mois et afficher tout les mois de l'années

$mois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aôut", "septembre", "octobre","novembre", "decembre");

//exercice2
//avec la tableau de l'exercice 1 afficher la valeur de la troisieme ligne de ce tableau"
echo $mois[2];

//exercice3
//avec la tableau de l'exercice 1 afficher la valeur de l'index 5
echo $mois[5];

//exercice4
//moidifier le mois d'avril par julien
$mois[3]='Julien';
echo $mois[3];

//exercice5
//creer un tableau assiociatif avec comme index le numero de departement
$asso = array(02=>'aisne', 59=>'nord', 60=>'oise', 62=>'pas-de-calais', 80=>'somme',);
//exercice6
//avec le tableau de l'exercice 5 afficher l'index 59
echo $asso[59];


//exercice7
//avec le tableau de l'exercice 5 ajouter le departement 51 
array_push($asso,"51","marne");

//exercice8
//avec le tableau de l'exercice 1 et une boucle afficher toute les valeur de ce tableau
foreach ($mois as $key => $value) {
	echo $value;
}
//exercice9
//avec le tableau de l'exercice 5 afficher toute les valeur de ce tableau avec leur clef
print_r($asso);

//exercice10
//faire une boucle et afficher le tableau

foreach ($asso as $key => $value) {
	echo "le depratement".$value." à le numéro".$key;
}


?>
</body>
</html>