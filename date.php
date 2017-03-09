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
//exercice5
//exercice6

//exercice7
//exercice8


?>