<?php
//exercice1
echo date('d/m/Y').'<br/>';
//exercice2
echo date("d-m-Y").'<br/>';
//exercice3
echo date("l F Y").'<br/>';
//exercice4
echo strftime("%A %e %B %Y").'<br/>';
setlocale(LC_TIME,'fr_FR.utf8', 'fra');
echo strftime("%A %d %B %G").'<br/>';
$date = date_create();
echo date_timestamp_get($date).'<br/>';
echo time().'<br/>';
echo mktime(15, 34, 12, 03, 2, 2016).'<br/>';
//exercice5
$datetime1 = new Datetime('2016-05-16');
$datetime2 = new Datetime();
$interval = $datetime1 -> diff($datetime2);
echo $interval -> format('%a jour').'<br/>';
//exercice6
//Afficher le nombre de jour dans le mois de février de l'année 2016.
//exercice7
//Afficher la date du jour + 20 jours.
//exercice8
//Afficher la date du jour - 22 jours
//exercice9
//TP Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.

//ressortir un le nombre de jour de differance


?>