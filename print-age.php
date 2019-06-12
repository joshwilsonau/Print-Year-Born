<?php
// Using just dates.  day/month/year
$bday = new DateTime('1.1.2000'); // Your date of birth
$today = new Datetime(date('d.m.y'));
$diff = $today->diff($bday);
printf('%d', $diff->y);
?>

<?php
// Using Variable from Database
$bday = new DateTime($variablefromdatabase); // Your date of birth
$today = new Datetime(date('d.m.y'));
$diff = $today->diff($bday);
printf('%d', $diff->y);
?>
