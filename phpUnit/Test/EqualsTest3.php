<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:29
 */
class EqualsTest3 extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo><bar/></foo>');

        $actual = new DOMDocument;
        $actual->loadXML('<bar><foo/></bar>');

        $this->assertEquals($expected, $actual);
    }
}
