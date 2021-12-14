<?php
include 'libs/convert.php';
function konvertuoti(int|float $ka, string $kaip): float {
    switch ($kaip){
        case 'mylios':
            $ats = km2myles($ka);
            break;
        case 'km':
            $ats = myles2km($ka);
            break;
        default:
            throw new Exeption ('Nesuprantamas formatas');

    }
return $ats;
}

function konvertkg(int|float $ka, string $kaip): float
{
    switch ($kaip) {
        case 'svarai': $ats = kg2svarai($ka);break;
        case 'kg': $ats = svarai2kg($ka);break;
        default: throw new Exeption ('Nesuprantamas formatas');}
    return $ats;
}

function konvertC(int|float $ka, string $kaip): float
{switch ($kaip) {
        case 'far':$ats = cel2far($ka);
            break;
        case 'cel':$ats = far2cel($ka);
            break;
        default:throw new Exeption ('Nesuprantamas formatas');
    }
    return $ats;
   }

function konvertCF(int|float $ka, string $kaip): float
{switch ($kaip) {
    case 'far':$ats = cel2far($ka);
        break;
    case 'cel':$ats = far2cel($ka);
        break;
    default:throw new Exeption ('Nesuprantamas formatas');
}
    return $ats;

}
