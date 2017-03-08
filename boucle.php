<!DOCTYPE html>
<html>
<head>
	<title>exercice3</title>
</head>
<body>


<?php
	$chiffre1=1;
	$nb1=100;
	$nb2=45;
 	$var1=0;
 	$var2=55;
 	$compteur = 0;
 	//exo1	
while ($compteur <= 10){
    printf("La variable compteur vaut %d\n", $compteur);
    $compteur++;
}


	//exo2

while ($var2 < 20){
	echo $var1 * $var2;
	$var1++;
}

	//exo3
while ($nb1 >= 10){
	echo $nb1 * $nb2;
	$nb1--;
}
	//exo4


	//exo5
	//en allant de 1 a 15 avec un pas de 1: afficher le message "on y arrive presque";

for ($i = 1; $i <= 15; $i++) {
    echo "On y arrive presque. ";
}


	//exo6
	//en allan de 20 a 0 avec un pas de 1 afficher "le message c'est presque BON"
for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon. ";
   }


	//exo7
   //en allant de 1 a 100 au pas de 15 afficher "le message on tiens le bon bout"
  for ($i = 1; $i <= 100; $i+=15) {
    echo "On tiens le bon bout. ";
   }

	//exo8
   	//en allant de 200 À 0 au pas de 12 afficher le message "ENFIN!!!!"
for ($i = 200; $i >= 0; $i-=12) {
    echo "ENFIN!!!! ";
   }
?>
</body>
</html>