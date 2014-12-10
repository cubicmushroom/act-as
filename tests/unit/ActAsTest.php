<?php

namespace CubicMushroom\ActAs;


use Codeception\Specify;
use Codeception\TestCase\Test;
use CubicMushroom\ActAs\StorageEngine\StorageEngine;


class ActAsTest extends Test
{
    use Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var ActAs
     */
    protected $actAs;


    /**
     * Run before each test
     */
    protected function _before()
    {
        $this->actAs = new ActAs;
    }


    /**
     * Run after each test
     */
    protected function _after()
    {
    }


    // tests ActAs sets up OK with correct parameters
    public function testCorrectSetup()
    {
        $this->specify('can set the storage engine to be used', function() {
            $storageClass = '\CubicMushroom\ActAs\StorageEngine\StorageEngine';
            /** @var StorageEngine $mockStorageEngine */
            $mockStorageEngine = $this->getMock($storageClass);
            $this->actAs->setStorageEngine($mockStorageEngine);
            $returnedStorageEngine = $this->actAs->getStorageEngine();
            $this->assertInstanceOf($storageClass, $returnedStorageEngine);
        });

        $this->specify('can set the validator');
    }

    // tests ActAs fails with incorrect storageEngine parameter
}