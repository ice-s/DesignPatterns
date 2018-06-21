<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:09 PM
 */

namespace Factory\FactoryInterfaces;

use Entities\EntityInterfaces\BookInterface;

interface FactoryMethodInterface
{
    /**
     * @param $param
     * @return BookInterface
     */
    public function makeBook($param = null);
}