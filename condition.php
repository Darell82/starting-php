<!DOCTYPE html>
<html>
<head>
	<title>exercice2</title>
</head>
<body>
<?php
$age=23;
	if($age>=18){
		echo "vous êtes majeur<br>";
	}
$iseasy=true;
	if($iseasy==true){
		echo "c'est facile<br>";
	}else{
		echo "c'est difficile<br>";
	}

$age=24;
$genre="femme";

	if($age>=18 AND $genre="homme"){
		echo "vous êtes un homme et vous êtes majeur<br>";
	}elseif($age<18 AND $genre="homme"){
		echo "vous êtes un homme et vous êtes mineur<br>";
	}elseif($age>=18 AND $genre="femme"){
		echo "vous êtes une femme et vous êtes majeur<br>";
	}elseif($age<18 AND $genre="femme"){
		echo "vous êtes une femme et vous êtes mineur<br>";
	}
echo ($maVariable if= 'Homme') echo 'C\'est une développeuse !!!' else 'C\'est un développeur !!!';
echo ($maVariable == false) if 'c\'est pas bon !!!' else 'c\'est ok !!';
echo ($monAge >= 18) if 'Tu es majeur' else 'Tu n\'es pas majeur';
echo ($maVariable) if 'c'est ok !!' else 'c'est pas bon !!!';
?>
?>
</body>
</html>