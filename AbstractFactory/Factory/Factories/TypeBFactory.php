<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;

use Entities\Entities\Book\Math;
use Entities\Entities\Vehicle\Oto;
use Factory\Abstracts\AbstractFactory;

class TypeBFactory extends AbstractFactory
{
    /**
     * @param null $param
     * @return Math|\Entities\EntityInterfaces\Book
     */
    public function makeBook($param = null)
    {
        $book = new Math();

        return $book;
    }

    /**
     * @param null $param
     * @return Oto|\Entities\EntityInterfaces\Vehicle
     */
    public function makeVehicle($param = null)
    {
        $vehicle = new Oto();
        return $vehicle;
    }

}
