<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\FactoryMethods;

use Entities\Entities\Chemistry;
use Entities\Entities\Math10;
use Entities\Entities\Physical10;
use Factory\FactoryInterfaces\FactoryMethodInterface;

class BookFactoryMethod implements FactoryMethodInterface
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
                $book = new Chemistry();
                break;
            case "Math":
                $book = new Math10();
                break;
            case "Physical":
                $book = new Physical10();
                break;
            default:
                $book = new Math10();
                break;
        }
        return $book;
    }
}
