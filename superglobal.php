<!DOCTYPE html>
<html>
<head>
	<title>exercice8</title>

</head>
<body>
<a href="superglobal2.php">superglobal2</a>
<?php
//exercice 1
//faire une page html permettant de donner a l'utilisateur son useragent,son adresse ip,le nom du serveur.

 
echo "User_Agent : ".$_SERVER['HTTP_USER_AGENT']."<br><br>";
echo "Server_Name : ".$_SERVER['SERVER_NAME']."<br><br>";
echo "Server_Adress : ".$_SERVER['REMOTE_ADDR']."<br><br>"; 



//exercice 2
//sur la page superglobal.phph lien vers l'autre page superglobal2.php,nom,prenom,age.

  session_start();

   $_SESSION['nom'] = "Knight";
   $_SESSION['prenom'] = "Darell";
   $_SESSION['age'] = "34 ans";

echo "<p><a href='superglobal2.php'></a></p>";
 

//exercice 3
//faire un formulaire qui permet de recuperer le login et le mot de passe utilisateur, à la validation du formulaire stoquer les infos dans un cookie.

$value = "cookie";

setcookie("pseudo", $_SESSION['nom']);
setcookie("Password", $_SESSION['prenom'], time()+3600); 

echo $_COOKIE["pseudo"];
echo $_COOKIE[ "Password"];


//exercice 4
//sur super global2.php.recuperer les infos du cookie et les afficher.

//exercice 5
//verifier si le cookie existe,si oui faire un formulaire pour le modifier.

//exercice 6

//exercice 7

//exercice 





?>
</body>
</html>