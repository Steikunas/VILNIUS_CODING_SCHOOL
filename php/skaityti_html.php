<?php
$htmlviens = fopen('htmlPusl.html', 'r') or die("Nepavyko atidaryti failo!");
$dydis = filesize('htmlPusl.html');
echo fread($htmlviens, $dydis);
fclose($htmlviens);
?>

