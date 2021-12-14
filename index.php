<?php

$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
] ;
foreach ($ceu as $key => $value) {
    echo $key . '=' . $value . '<br/>';
}
echo '********************' . '<br/>';

ksort ($ceu);
foreach($ceu as $x => $x_value) {
    echo $x .'='. $x_value;
    echo "<br>";
}
echo '********************' . '<br/>';

asort ($ceu);
for ($i = 0, $iMax = count ($ceu); $i < $iMax; $i += 2) {
   $key = array_keys($ceu)[$i];
$value = ($ceu)[$key];
    echo $key . '=' . $value;
    echo "<br>";
}
echo '********************' . '<br/>';

foreach ($ceu as $key => $value) {
    if (
        str_contains($key,'A') ||str_contains( $value, 'A' )
    ) {
        echo $key . '=' . $value;
        echo "<br>";
    }
}
echo '********************' . '<br/>';



