<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;


use Entities\Entities\Vehicle\Motor;
use Entities\Entities\Vehicle\Oto;
use Factory\Abstracts\AbstractFactory;

class VehicleFactory extends AbstractFactory
{
    public function makeBook($param = null)
    {
        return null;
    }

    public function makeVehicle($param = null)
    {
        $vehicle = null;
        switch ($param) {
            case "Motor":
                $vehicle = new Motor();
                break;
            case "Oto":
                $vehicle = new Oto();
                break;
            default:
                $vehicle = new Motor();
                break;
        }

        return $vehicle;
    }

}
