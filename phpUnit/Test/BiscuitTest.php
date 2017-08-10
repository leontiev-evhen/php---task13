<?php

/**
 * Created by PhpStorm.
 * User: yevhen
 * Date: 10.08.17
 * Time: 10:43
 */
require_once '../../libs/Biscuit.php';
class BiscuitTest extends PHPUnit_Framework_TestCase
{
    public function testEquals()
    {
        $theBiscuit = new Biscuit('Ginger');
        $myBiscuit  = new Biscuit('Ginger');

        $this->assertThat(
            $theBiscuit,
            $this->logicalNot(
                $this->equalTo($myBiscuit)
            )
        );
    }
}
