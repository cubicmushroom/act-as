<?php

namespace CubicMushroom\ActAs;


class ActAsTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCorrectSetup()
    {
        $actAs = new ActAs;
    }

}