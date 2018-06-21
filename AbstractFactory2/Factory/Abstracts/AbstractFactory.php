<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:09 PM
 */

namespace Factory\Abstracts;

use Entities\EntityInterfaces\DoorInterface;
use Entities\EntityInterfaces\HoodInterface;
use Entities\EntityInterfaces\WheelInterface;

abstract class AbstractFactory
{
    /**
     * @return DoorInterface
     */
    abstract public function makeDoor();

    /**
     * @return HoodInterface
     */
    abstract public function makeHood();

    /**
     * @return WheelInterface
     */
    abstract public function makeWheel();
}