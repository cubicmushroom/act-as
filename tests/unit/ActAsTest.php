<?php

namespace CubicMushroom\ActAs;


use Codeception\Specify;
use Codeception\TestCase\Test;
use CubicMushroom\ActAs\Exception\InvalidArgumentException;
use CubicMushroom\ActAs\PermissionValidator\PermissionValidator;
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


    /**
     * Tests ActAs sets up OK with correct parameters
     */
    public function testCorrectSetup()
    {
        $this->specify('can set the storage engine to be used', function () {

            // Setup mocks
            $storageClass = '\CubicMushroom\ActAs\StorageEngine\StorageEngine';
            /** @var StorageEngine $mockStorageEngine */
            $mockStorageEngine = $this->getMock($storageClass);

            // Test storage engine setting
            $this->actAs->setStorageEngine($mockStorageEngine);
            $returnedStorageEngine = $this->actAs->getStorageEngine();
            $this->assertInstanceOf($storageClass, $returnedStorageEngine);
        });

        $this->specify('can set the validator to be used', function () {

            // Setup mocks
            $validatorClass = '\CubicMushroom\ActAs\PermissionValidator\PermissionValidator';
            /** @var PermissionValidator $mockPermissionValidator */
            $mockPermissionValidator = $this->getMock($validatorClass);

            // Test permission validator setting
            $this->actAs->setPermissionValidator($mockPermissionValidator);
            $returnedPermissionValidator = $this->actAs->getPermissionValidator();
            $this->assertInstanceOf($validatorClass, $returnedPermissionValidator);
        });
    }


    /**
     * Tests ActAs fails with incorrect storageEngine parameter
     */
    public function testIncorrectSetup()
    {
        $this->specify('Using an invalid storage engine causes an exception', function () {
            throw new InvalidArgumentException;
        }, ['throws' => new InvalidArgumentException]);
    }

    // tests ActAs successfully handles requests to act as, with permissions

    // tests ActAs successfully handles requests to act as, without permissions

    // tests ActAs successfully confirms who a user is acting as

    // tests ActAs handles who's user acting as when no user to act as set

}