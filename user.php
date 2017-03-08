<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
<?php
if(isset($_POST['nom']) AND isset($_POST["prenom"])){
	echo htmlspecialchars($_POST['nom']);
	echo htmlspecialchars($_POST['prenom']);
}
if(isset($_GET['nom']) AND isset($_GET["prenom"])){
	echo htmlspecialchars($_GET['nom']);
	echo htmlspecialchars($_GET['prenom']);
}
if(isset($_GET['nom']) AND isset($_GET["prenom"])){
	echo htmlspecialchars($_GET['nom']);
	echo htmlspecialchars($_GET['prenom']);
}

?>
 
</body>
</html>