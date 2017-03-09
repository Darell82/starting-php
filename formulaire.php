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



 
 
 
 
<?php if (!isset($_POST['name'], $_POST['prenom'])): ?>
	

<form action="" method="post">
	<select name="genre">
		<option>Merci de choisir votre genre</option>
 		<option value="une">Mr</option>
    	<option value="deux">Madamme</option>
 	</select>
 		<p>Votre nom : <input type="text" name="name" /></p>
 		<p>Votre prenom: <input type="text" name="prenom" /></p>
 		<p><input type="file" name="fichier"></p>
 		<p><input type="submit" value="OK"></p>

</form>
<?php else :
echo $_POST['name']. $_POST['prenom'].$_POST['genre'].$_POST['fichier'];

endif;
?>
 
</body>
</html>