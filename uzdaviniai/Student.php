<?php
include 'Person.php';
class Student extends Person {
    private string $grupesId;

public function gautiGrupesNr (){
    return $this->grupesId;
}


}