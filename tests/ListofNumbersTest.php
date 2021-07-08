<?php

namespace Tests;

use App\ListOfNumbers;
use PHPUnit\Framework\TestCase;


class ListOfNumbersTest extends TestCase
{

    public function test_if_number_is_divisible_by_3_return_Cyber()
    {
        $number = 3;
        $cyber = new ListOfNumbers();

        $result = $cyber->executeConditionals($number);

        $this->assertEquals('Cyber', $result);
    }

    public function test_if_number_is_divisible_by_5_return_Click()
    {
        $number = 5;
        $click = new ListOfNumbers();

        $result = $click->executeConditionals($number);

        $this->assertEquals('Click', $result);
    }

    public function test_if_number_is_divisible_by_5_and_3_return_cyberclick()
    {
        $number = 15;
        $cyberclick = new ListOfNumbers();

        $result = $cyberclick->executeConditionals($number);

        $this->assertEquals('cyberclick', $result);
    }   
}