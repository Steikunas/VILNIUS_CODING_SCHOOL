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


ksort ($ceu);
foreach($ceu as $x => $x_value) {
    echo $x .'='. $x_value;
    echo "<br>";
}

echo str_word_count("A");
echo str_word_count($string = 'A', $format = 1, $characters = 'A');
echo "<br>";

foreach ($ceu as $char = “A”) {echo $char();};

count_chars($ceu);
foreach (count_chars('a', 1) as $i => $number) {
    echo $i .'='. $number;
    echo "<br>";

}
