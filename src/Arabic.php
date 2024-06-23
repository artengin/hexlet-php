<?php

namespace Converter\Arabic;

use const Converter\Engine\NUMERALS;

use function Converter\Engine\startConvert;
use function Converter\Roman\toRoman;

const DESCRIPTIONGAME = 'Converter Roman number to Arabic';
const NUMBERSTYLE = 'Roman';

function start()
{
    startConvert(DESCRIPTIONGAME, NUMBERSTYLE, fn ($first) => toArabic($first));
}
function toArabic($roman)
{
    $result = 0;
    $arrayRoman = str_split($roman);
    $length = count($arrayRoman);
    for ($i = 0; $i < $length; $i++) {
        if (!array_key_exists($arrayRoman[$i], NUMERALS)) {
            return "Incorrect initial number";
        }
        $nextValue = empty($arrayRoman[$i + 1]) ? $arrayRoman[$i] : $arrayRoman[$i] . $arrayRoman[$i + 1];
        if (array_key_exists($nextValue, NUMERALS)) {
            $result += NUMERALS[$nextValue];
            $i++;
        } else {
            $result += NUMERALS[$arrayRoman[$i]];
        }
    }
    if (toRoman($result) !== $roman) {
        return "Incorrect initial number";
    }
    return $result;
}
