<?php

namespace Converter\Roman;

use const Converter\Engine\NUMERALS;

use function Converter\Engine\startConvert;

const DESCRIPTIONGAME = 'Converter Arabic number to Roman';
const NUMBERSTYLE = 'Arabic';

function start()
{
    startConvert(DESCRIPTIONGAME, NUMBERSTYLE, fn ($first) => toRoman($first));
}
function toRoman($arab)
{
    $toInt = (int) $arab;
    if ($toInt === 0) {
        return "Incorrect initial number";
    }
    if (strlen($toInt) !== strlen($arab)) {
        return "Incorrect initial number";
    }
    $result = "";
    while ($arab > 0) {
        foreach (NUMERALS as $key => $value) {
            if ($arab >= $value) {
                $arab -= $value;
                $result .= $key;
                break;
            }
        }
    }
    return $result;
}
