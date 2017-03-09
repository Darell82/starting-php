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

	if($age>=18 AND $genre=="homme"){
		echo "vous êtes un homme et vous êtes majeur<br>";
	}elseif($age<18 AND $genre=="homme"){
		echo "vous êtes un homme et vous êtes mineur<br>";
	}elseif($age>=18 AND $genre=="femme"){
		echo "vous êtes une femme et vous êtes majeur<br>";
	}elseif($age<18 AND $genre=="femme"){
		echo "vous êtes une femme et vous êtes mineur<br>";
	}
$magnitude = 5;

switch ($magnitude) {
	case '1':
		echo 'test1';
		break;
	case '2':
		echo 'test2';
		break;
	case '3':
		echo 'test3';
		break;
	case '4':
		echo 'test4';
		break;
	case '5':
		echo 'test5';
		break;

	
}




?>

</body>
</html>