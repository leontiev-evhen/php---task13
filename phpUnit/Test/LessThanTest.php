<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:34
 */
class LessThanTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertLessThan(1, 2);
    }
}
