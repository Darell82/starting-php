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
//date juin 2007


$calendrier = new DateTime($_GET['annee'].'-'.$_GET['mois'].'-1');
$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $_GET['mois'], $_GET['annee']);
$numtour=0;

switch ($calendrier->format('l')){
    case 'Monday':
        $index=0;
        break;
    case 'Tuesday':
        $index=1;
        break;
    case 'Wednesday':
        $index=2;
        break;
    case 'Thursday':
        $index=3;
        break;
    case 'Friday':
        $index=4;
        break;
    case 'Saturday':
        $index=5;
        break;
    case 'Sunday':
        $index=6;
        break;
}

$numerosdumois = array();
for ($i=0; $i < $index ; $i++) {
    array_push($numerosdumois, ' ');
}
for ($numerojours=1; $numerojours <= $nombreDeJours ; $numerojours++) {
    array_push($numerosdumois, $numerojours);
}
for ($i=0; $i < 6-$index ; $i++) {
    array_push($numerosdumois, ' ');
}


?>
<link rel="stylesheet" type="text/css" href="style/css/style.css">

<table>
    <tr>
        <td colspan="7"><?php echo $_GET['mois']." / ".$_GET['annee']." @RegisStyle!"?></td>
    </tr>    
    <tr>
        <td>Lu</td>
        <td>Ma</td>
        <td>Me</td>
        <td>Je</td>
        <td>Ve</td>
        <td>Sa</td>
        <td>Di</td>
    </tr>

    <?php
    for ($semaine=0; $semaine <= 4; $semaine++) {
        echo '<tr>';
        for ($jour=0; $jour <= 6; $jour++) {
            echo '<td>'.$numerosdumois[$numtour].'</td>';
            $numtour++;
        }
        echo '</tr>';    
    }    ?>

</table>

<form action="" method="get">
<select name="mois">
    <option value="1">Janvier</option>
    <option value="2">Fevrier</option>
    <option value="3">Mars</option>
    <option value="4">Avril</option>
    <option value="5">Mai</option>
    <option value="6">Juin</option>
    <option value="7">Juillet</option>
    <option value="8">Aout</option>
    <option value="9">Septembre</option>
    <option value="10">Octobre</option>
    <option value="11">Novembre</option>
    <option value="12">Decembre</option>
</select>
<select name="annee">
	<?php for ($i=2000; $i <=2100 ; $i++) { 
		echo '<option value="'.$i.'">'.$i.'</option>';
	} ?>
</select>
<button type="submit">ok</button>


	
</form>