<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:09 PM
 */

namespace Factory\Abstracts;


use Entities\EntityInterfaces\Book;
use Entities\EntityInterfaces\Vehicle;

abstract class AbstractFactory
{
    /**
     * @param $param
     * @return Book
     */
    abstract public function makeBook($param = null);

    /**
     * @param $param
     * @return Vehicle
     */
    abstract public function makeVehicle($param = null);
}