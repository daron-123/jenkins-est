<?php

namespace Ylamalem\test;

use PHPUnit\Framework\TestCase;
use Ylamalem\JenkinsEst\Math;

class MathTest extends TestCase
{

    public function testAdd(){
        $this -> assertEquals(7,Math::add(3,4));
    }
}