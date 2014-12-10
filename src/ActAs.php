<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 09/12/14
 * Time: 09:36
 */

namespace CubicMushroom\ActAs;


use CubicMushroom\ActAs\StorageEngine\StorageEngineInterface;


class ActAs implements ActAsInterface
{

    /**
     * @var StorageEngineInterface
     * @todo replace interface with concrete class
     */
    protected $storageEngine;


    /**
     * @param StorageEngineInterface $storageEngine
     * @todo replace interface with concrete class
     * @return $this
     */
    public function setStorageEngine($storageEngine)
    {
        $this->storageEngine = $storageEngine;

        return $this;
    }


    /**
     * @return StorageEngineInterface
     * @todo replace interface with concrete class
     */
    public function getStorageEngine()
    {
        return $this->storageEngine;
    }
}