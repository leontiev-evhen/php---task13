<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:47
 */
class LongArrayDiffTest extends PHPUnit_Framework_TestCase
{
    public function testEquality() {
        $this->assertEquals(
            array(0,0,0,0,0,0,0,0,0,0,0,0,1,2,3 ,4,5,6),
            array(0,0,0,0,0,0,0,0,0,0,0,0,1,2,33,4,5,6)
        );
    }
}
