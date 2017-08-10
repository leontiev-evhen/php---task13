<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:18
 */
class ExceptionTest4 extends PHPUnit_Framework_TestCase
{
    public function testException() {
        try {
            // ... Code that is expected to raise an exception ...
        }

        catch (InvalidArgumentException $expected) {
            return;
        }

        $this->fail('An expected exception has not been raised.');
    }
}
