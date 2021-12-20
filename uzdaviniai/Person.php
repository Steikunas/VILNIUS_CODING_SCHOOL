<?php

class Peron {
    public string $vardas;
    public string $pavarde;
    public string $asmensKodas;

    public function __construct (){
    $this->asmensKodas = random_int(1,99);}
}
