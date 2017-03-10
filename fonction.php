<!DOCTYPE html>
<html>
<head>
	<title>exercice4</title>
</head>
<body>
<?php
	//variables



	//exercice1
	//faire une fonction qui retourne true.
	function coucou(){
		 return "true ";
		}
echo coucou();

	
	//exercice2
	//faire une function qui prends en parametre une chaine de caractere et qui retourne cette meme chaine de caractere.
	
	function youpi($carac){
		return $carac;
	}
echo youpi("hey ");
		
	//exercice3
	//faire une fonction qui prends en parametre 2 chaines de caractere et qui renvoie la concatenation des 2 chaines.

	function concat($cara , $cara1){
			return $cara.$cara1;
	}
echo concat ("salut ","super ");


	//exercice4
	//faire une function qui prend en parametre 2 nombres,la function doit retourner le premier nombre et plus grand si le premier nombre et plus grand que le deuxieme??????????what??????

	//exercice5
	//faire une fonction qui prend en compte un nombre et une chaine des caractere et qui renvoie la concate des deux.

	function fusion($nb , $caractere){
			return $nb.$caractere;
	}
echo fusion ( 10 , " chouette ");

	//exercice6
	//faire une fonction qui prend 3 parametre, nom, prenom, et age.elle doit renvoyer une chaine: bonjour nom prenom tu as ans.
	
	function bonjour($nom , $prenom , $age){
			return $nom.$prenom.$age;
	}

	echo bonjour ("bonjour "."leroux"."alexandre"." tu as ".34." ans.");

	//exercice7
	
	//exercice8

?>
</body>
</html>