<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;

use Entities\Entities\Book\Chemistry;
use Entities\Entities\Vehicle\Motor;
use Factory\Abstracts\AbstractFactory;

class TypeAFactory extends AbstractFactory
{
    /**
     * @param null $param
     * @return Chemistry|\Entities\EntityInterfaces\Book
     */
    public function makeBook($param = null)
    {
        $book = new Chemistry();

        return $book;
    }

    /**
     * @param null $param
     * @return Motor|\Entities\EntityInterfaces\Vehicle
     */
    public function makeVehicle($param = null)
    {
        $vehicle = new Motor();
        return $vehicle;
    }

}
