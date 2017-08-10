<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:25
 */
require_once '../../libs/Foo.php';
require_once '../../libs/Bar.php';
class ContainsOnlyInstancesOfTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnlyInstancesOf('Foo', array(new Foo(), new Bar(), new Foo()));
    }
}
