<?php
include 'Student.php';
include 'Grupe.php';

$studentas2 = new Student ();,
    $studentas3 = new Student ();
    $studentas4 = new Student ();
    $studentas5 = new Student ();


$asmuo = new Person ();

$grupe = new Grupe ('KCS777V', 72);
echo $grupe->gautiPavadinima();
echo "\n";

echo $asmuo -> vardas;

$studentai = [
 $studentas1,
    $studentas2,
    $studentas3,
    $studentas4,
    $studentas5,

];
foreach ($studentai as $studentas) {
    echo $studentas ->asmensKodas . "\n";
}