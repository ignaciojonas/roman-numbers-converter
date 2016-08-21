<?php
class RomanNumbersModelTests extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Class::Method
     */
    public function testCovertToRoman1ReturnI()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(1);
        $this->assertEquals($result, "I");
    }

    public function testCovertToRoman2ReturnII()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(2);
        $this->assertEquals($result, "II");
    }
    public function testCovertToRoman5ReturnV()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(5);
        $this->assertEquals($result, "V");
    }
    public function testCovertToRoman7ReturnVII()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(7);
        $this->assertEquals($result, "VII");
    }
    public function testCovertToRoman10ReturnX()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(10);
        $this->assertEquals($result, "X");
    }
    public function testCovertToRoman15ReturnXV()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(15);
        $this->assertEquals($result, "XV");
    }
    public function testCovertToRoman38ReturnXXXVIII()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(38);
        $this->assertEquals($result, "XXXVIII");
    }
    public function testCovertToRoman50ReturnL()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(50);
        $this->assertEquals($result, "L");
    }
    public function testCovertToRoman9ReturnIX()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(9);
        $this->assertEquals($result, "IX");
    }
    public function testCovertToRoman39ReturnXXXIX()
    {
        $romanConverter = new RomanNumbersModel();
        $result = $romanConverter->getRomanNumber(39);
        $this->assertEquals($result, "XXXIX");
    }
}
