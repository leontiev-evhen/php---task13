<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:35
 */
class RegExpTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertRegExp('/foo/', 'bar');
    }
}
