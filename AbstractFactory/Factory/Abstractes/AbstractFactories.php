<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:09 PM
 */

namespace Factory\Abstractes\AbstractFactories;


use Entities\EntityInterfaces\BookInterface;

abstract class AbstractFactories
{
    /**
     * @param $param
     * @return BookInterface
     */
    abstract public function makeBook($param);
}