<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:32
 */
class InternalTypeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertInternalType('string', 42);
    }
}
