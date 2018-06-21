<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\FactoryMethods;

use Entities\Entities\Chemistry11;
use Entities\Entities\Math11;
use Entities\Entities\Physical11;
use Factory\FactoryInterfaces\FactoryMethodInterface;

class Book11FactoryMethod implements FactoryMethodInterface
{
    public function makeBook($param = null)
    {
        return $this->createObject($param);
    }

    private function createObject($param)
    {
        $book = NULL;
        switch ($param) {
            case "Chemistry":
                $book = new Chemistry11();
                break;
            case "Math":
                $book = new Math11();
                break;
            case "Physical":
                $book = new Physical11();
                break;
            default:
                $book = new Math11();
                break;
        }
        return $book;
    }
}
