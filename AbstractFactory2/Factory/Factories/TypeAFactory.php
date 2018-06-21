<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;

use Entities\Entities\Doors\DoorTypeA;
use Entities\Entities\Hoods\HoodTypeA;
use Entities\Entities\Wheels\WheelTypeA;
use Factory\Abstracts\AbstractFactory;

class TypeAFactory extends AbstractFactory
{
    /**
     * @return DoorTypeA|\Entities\EntityInterfaces\DoorInterface
     */
    public function makeDoor()
    {
        return new DoorTypeA();
    }

    /**
     * @return HoodTypeA|\Entities\EntityInterfaces\HoodInterface
     */
    public function makeHood()
    {
        return new HoodTypeA();
    }

    /**
     * @return WheelTypeA|\Entities\EntityInterfaces\WheelInterface
     */
    public function makeWheel()
    {
        return new WheelTypeA();
    }

}
