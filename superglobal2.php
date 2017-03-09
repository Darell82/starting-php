<!DOCTYPE html>
<html>
<head>
	<title>superglobal2</title>
</head>
<body>
<?php
//exercice2
       session_start();

 			echo "<p>" .$_SESSION['nom']. "</p>";
 			echo "<p>" .$_SESSION['prenom']. "</p>";
 			echo "<p>" .$_SESSION['age']. "</p>";
?>

</body>
</html>