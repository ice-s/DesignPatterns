<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory\Factories;

use Entities\Entities\Book\Chemistry;
use Entities\Entities\Book\Math;
use Entities\Entities\Book\Physical;
use Factory\Abstracts\AbstractFactory;

class BookFactory extends AbstractFactory
{
    public function makeBook($param = null)
    {
        $book = null;
        switch ($param) {
            case "Chemistry":
                $book = new Chemistry();
                break;
            case "Math":
                $book = new Math();
                break;
            case "Physical":
                $book = new Physical();
                break;
            default:
                $book = new Math();
                break;
        }

        return $book;
    }

    public function makeVehicle($param = null)
    {
        return null;
    }

}
