<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\FactoryProducer;

use Factory\Factories\BookFactory;
use Factory\Factories\TypeAFactory;
use Factory\Factories\TypeBFactory;
use Factory\Factories\VehicleFactory;

class FactoryProducer
{
    /**
     * @param null $choice
     * @return BookFactory|VehicleFactory|null
     */
    public static function getFactory($choice = null){
        $factory = null;
        switch ($choice) {
            case "Vehicle":
                $factory = new VehicleFactory();
                break;
            case "Book":
                $factory = new BookFactory();
                break;
            case "TypeA":
                $factory = new TypeAFactory();
                break;
            case "TypeB":
                $factory = new TypeBFactory();
                break;

        }

        return $factory;
    }
}
