<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 10/12/14
 * Time: 13:12
 */

namespace CubicMushroom\ActAs;


use CubicMushroom\ActAs\PermissionValidator\PermissionValidatorInterface;
use CubicMushroom\ActAs\StorageEngine\StorageEngineInterface;


interface ActAsInterface
{
    /**
     * @param StorageEngineInterface $storageEngine
     * @return $this
     */
    public function setStorageEngine($storageEngine);


    /**
     * @return StorageEngineInterface
     */
    public function getStorageEngine();


    /**
     * @param PermissionValidatorInterface $permissionValidator
     * @return $this
     */
    public function setPermissionValidator($permissionValidator);


    /**
     * @return PermissionValidatorInterface
     */
    public function getPermissionValidator();
}