<?php

namespace Tests\Arabic;

use Webmozart\Assert\Assert;

use function cli\line;
use function Converter\Arabic\toArabic;

use const Converter\Engine\NUMERALS;

function start()
{
    Assert::eq(toArabic('I', NUMERALS), '1');
    Assert::eq(toArabic('II', NUMERALS), '2');
    Assert::eq(toArabic('IV', NUMERALS), '4');
    Assert::eq(toArabic('V', NUMERALS), '5');
    Assert::eq(toArabic('VI', NUMERALS), '6');
    Assert::eq(toArabic('XXVII', NUMERALS), '27');
    Assert::eq(toArabic('XLVIII', NUMERALS), '48');
    Assert::eq(toArabic('LIX', NUMERALS), '59');
    Assert::eq(toArabic('CLXIII', NUMERALS), '163');
    Assert::eq(toArabic('CDII', NUMERALS), '402');
    Assert::eq(toArabic('DLXXV', NUMERALS), '575');
    Assert::eq(toArabic('CMXI', NUMERALS), '911');
    Assert::eq(toArabic('MXXIV', NUMERALS), '1024');
    Assert::eq(toArabic('MMM', NUMERALS), '3000');
    Assert::eq(toArabic('IIII', NUMERALS), "Incorrect initial number");
    Assert::eq(toArabic('VX', NUMERALS), "Incorrect initial number");
    line("Test OK");
}
