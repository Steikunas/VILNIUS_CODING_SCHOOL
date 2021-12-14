<?php

const KM2MYLES = 0.6213;

function km2myles(int|float $ka): float {

    return $ka * KM2MYLES;
}
function myles2km(int|float $ka): float
{

    return $ka / KM2MYLES;
}

const KG2SVARAI = 2.20462;
function kg2svarai(int|float $ka): float {
    return $ka * KG2SVARAI;}
function svarai2kg(int|float $ka): float
{return $ka / KG2SVARAI;}

const CEL2FAR = 32;
function cel2far(int|float $ka): float {
    return $ka * 9/5 + CEL2FAR;}
function far2cel(int|float $ka): float
{return $ka - CEL2FAR * 9 / 5;}