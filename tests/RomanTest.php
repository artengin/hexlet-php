<?php

namespace Tests\Roman;

use Webmozart\Assert\Assert;

use function cli\line;
use function Converter\Roman\toRoman;

use const Converter\Engine\NUMERALS;

function start()
{
    Assert::eq(toRoman('1', NUMERALS), 'I');
    Assert::eq(toRoman('2', NUMERALS), 'II');
    Assert::eq(toRoman('4', NUMERALS), 'IV');
    Assert::eq(toRoman('5', NUMERALS), 'V');
    Assert::eq(toRoman('6', NUMERALS), 'VI');
    Assert::eq(toRoman('27', NUMERALS), 'XXVII');
    Assert::eq(toRoman('48', NUMERALS), 'XLVIII');
    Assert::eq(toRoman('59', NUMERALS), 'LIX');
    Assert::eq(toRoman('163', NUMERALS), 'CLXIII');
    Assert::eq(toRoman('402', NUMERALS), 'CDII');
    Assert::eq(toRoman('575', NUMERALS), 'DLXXV');
    Assert::eq(toRoman('911', NUMERALS), 'CMXI');
    Assert::eq(toRoman('1024', NUMERALS), 'MXXIV');
    Assert::eq(toRoman('3000', NUMERALS), 'MMM');
    Assert::eq(toRoman('a', NUMERALS), "Incorrect initial number");
    line("Test OK");
}
