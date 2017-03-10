<?php

require_once 'class/Formulaire.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$form =new Formulaire();
$form->debut('get', 'test.php');
$form->inputText('pseudo', '$login');
$form->valid();
?>
</body>
</html>

<form method="<?= $method; ?>" action="<?fichier; ?>">
    <input type="text" name="pseudo"<?php echo($login)? "value=$login": 'placeholder="votre login'?>">
    <button type="submit">ok</button>
</form>