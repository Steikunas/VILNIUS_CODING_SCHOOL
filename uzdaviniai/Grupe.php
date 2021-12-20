<?php

class Grupe
{
    private string $id;
    private string $name;
    private int $trukme;

    public function __construct(string $name, int $trukme){

        $this->name = $name;
        $this->trukme = $trukme;
    }

}