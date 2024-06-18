<?php

namespace Converter\Arabic;

use function Converter\Engine\startConvert;
use function Converter\Roman\toRoman;

const DESCRIPTIONGAME = 'Converter Roman number to Arabic';
const NUMBERSTYLE = 'Roman';

function start()
{
    startConvert(DESCRIPTIONGAME, NUMBERSTYLE, fn ($first, $second) => toArabic($first, $second));
}
function toArabic($roman, $numerals)
{
    $result = 0;
    $arrayRoman = str_split($roman);
    $length = count($arrayRoman);
    for ($i = 0; $i < $length; $i++) {
        if (!array_key_exists($arrayRoman[$i], $numerals)) {
            return "Incorrect initial number";
        }
        $nextValue = empty($arrayRoman[$i + 1]) ? $arrayRoman[$i] : $arrayRoman[$i] . $arrayRoman[$i + 1];
        if (array_key_exists($nextValue, $numerals)) {
            $result += $numerals[$nextValue];
            $i++;
        } else {
            $result += $numerals[$arrayRoman[$i]];
        }
    }
    if (toRoman($result, $numerals) !== $roman) {
        return "Incorrect initial number";
    }
    return $result;
}
