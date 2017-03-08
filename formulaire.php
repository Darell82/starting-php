<!DOCTYPE html>
<html>
<head>
	<title>exercice7</title>
</head>
<body>
<form action="user.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prenom: <input type="text" name="prenom" /></p>
 <p><input type="submit" value="OK"></p>
</form>


<form action="user.php" method="get">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prenom: <input type="text" name="prenom" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<form action="user.php" method="get">
	<select name="Mr" id="Mr">
 		<option value="une">Mr</option>
    	<option value="deux">Madamme</option>
 	</select>
 		<p>Votre nom : <input type="text" name="nom" /></p>
 		<p>Votre prenom: <input type="text" name="prenom" /></p>
 		<p><input type="submit" value="OK"></p>
</form>

 
 
 
 
<?php



?> 
</body>
</html>