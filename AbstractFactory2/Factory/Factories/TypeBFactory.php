<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;


use Entities\Entities\Doors\DoorTypeB;
use Entities\Entities\Hoods\HoodTypeB;
use Entities\Entities\Wheels\WheelTypeB;
use Factory\Abstracts\AbstractFactory;

class TypeBFactory extends AbstractFactory
{
    /**
     * @return DoorTypeB|\Entities\EntityInterfaces\DoorInterface
     */
    public function makeDoor()
    {
        return new DoorTypeB();
    }

    /**
     * @return DoorTypeB|\Entities\EntityInterfaces\HoodInterface
     */
    public function makeHood()
    {
        return new HoodTypeB();
    }

    /**
     * @return DoorTypeB|\Entities\EntityInterfaces\WheelInterface
     */
    public function makeWheel()
    {
        return new WheelTypeB();
    }

}
