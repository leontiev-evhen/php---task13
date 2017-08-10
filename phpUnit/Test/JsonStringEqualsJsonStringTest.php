<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:34
 */
class JsonStringEqualsJsonStringTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(array("Mascot" => "Tux")), json_encode(array("Mascott" => "ux"))
        );
    }
}
