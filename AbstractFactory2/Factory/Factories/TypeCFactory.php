<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;

use Entities\Entities\Doors\DoorTypeC;
use Entities\Entities\Hoods\HoodTypeC;
use Entities\Entities\Wheels\WheelTypeC;
use Factory\Abstracts\AbstractFactory;

class TypeCFactory extends AbstractFactory
{
    /**
     * @return DoorTypeC|\Entities\EntityInterfaces\DoorInterface
     */
    public function makeDoor()
    {
        return new DoorTypeC();
    }

    /**
     * @return HoodTypeC|\Entities\EntityInterfaces\HoodInterface
     */
    public function makeHood()
    {
        return new HoodTypeC();
    }

    /**
     * @return WheelTypeC|\Entities\EntityInterfaces\WheelInterface
     */
    public function makeWheel()
    {
       return new WheelTypeC();
    }
}
