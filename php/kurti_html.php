<?php

$htmlPusl = '<html><head><title>Mano psl</title></head><body><h1>Labas pasauli</h1></body></html>';

//Cia rasysime failo kurimo koda

$naujas = fopen("htmlPusl.html", "w");
fwrite ($naujas, $htmlPusl);

?>


