<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:35
 */
class ObjectHasAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertObjectHasAttribute('foo', new stdClass);
    }
}
