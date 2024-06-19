<?php

namespace Converter\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Converter\Roman\toRoman;
use function Converter\Arabic\toArabic;

use const Converter\Engine\NUMERALS;

class UtilsTest extends TestCase
{
    public function testToRoman()
    {
        $this->assertEquals('I', toRoman(1, NUMERALS));
        $this->assertEquals('II', toRoman(2, NUMERALS));
        $this->assertEquals('IV', toRoman(4, NUMERALS));
        $this->assertEquals('V', toRoman(5, NUMERALS));
        $this->assertEquals('VI', toRoman(6, NUMERALS));
        $this->assertEquals('XXVII', toRoman(27, NUMERALS));
        $this->assertEquals('XLVIII', toRoman(48, NUMERALS));
        $this->assertEquals('LIX', toRoman(59, NUMERALS));
        $this->assertEquals('CLXIII', toRoman(163, NUMERALS));
        $this->assertEquals('CDII', toRoman(402, NUMERALS));
        $this->assertEquals('DLXXV', toRoman(575, NUMERALS));
        $this->assertEquals('CMXI', toRoman(911, NUMERALS));
        $this->assertEquals('MXXIV', toRoman(1024, NUMERALS));
        $this->assertEquals('MMM', toRoman(3000, NUMERALS));
        $this->assertEquals("Incorrect initial number", toRoman('a', NUMERALS));
    }

    public function testToArabic()
    {
        $this->assertEquals(1, toArabic('I', NUMERALS));
        $this->assertEquals(2, toArabic('II', NUMERALS));
        $this->assertEquals(4, toArabic('IV', NUMERALS));
        $this->assertEquals(5, toArabic('V', NUMERALS));
        $this->assertEquals(6, toArabic('VI', NUMERALS));
        $this->assertEquals(27, toArabic('XXVII', NUMERALS));
        $this->assertEquals(48, toArabic('XLVIII', NUMERALS));
        $this->assertEquals(59, toArabic('LIX', NUMERALS));
        $this->assertEquals(163, toArabic('CLXIII', NUMERALS));
        $this->assertEquals(402, toArabic('CDII', NUMERALS));
        $this->assertEquals(575, toArabic('DLXXV', NUMERALS));
        $this->assertEquals(911, toArabic('CMXI', NUMERALS));
        $this->assertEquals(1024, toArabic('MXXIV', NUMERALS));
        $this->assertEquals(3000, toArabic('MMM', NUMERALS));
        $this->assertEquals("Incorrect initial number", toArabic('IIII', NUMERALS));
        $this->assertEquals("Incorrect initial number", toArabic('VX', NUMERALS));
    }
}
