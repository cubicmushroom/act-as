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

    // tests ActAs sets up OK with correct parameters
    public function testCorrectSetup()
    {
        $actAs = new ActAs;
        $actAs->setStorageEngine(null);
    }

    // tests ActAs fails with incorrect storageEngine parameter
}