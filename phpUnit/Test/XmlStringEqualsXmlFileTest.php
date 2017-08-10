<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:46
 */
class XmlStringEqualsXmlFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlStringEqualsXmlFile(
            '/home/sb/expected.xml', '<foo><baz/></foo>');
    }
}
