<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:33
 */
class JsonFileEqualsJsonFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertJsonFileEqualsJsonFile(
            'path/to/fixture/file', 'path/to/actual/file');
    }
}
