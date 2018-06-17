<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:25 PM
 */

namespace Factory;

use FactoryAbstracts\AbstractFactoryMethod;
use Entities\OReillyPHPBook;
use Entities\SamsPHPBook;

class OReillyFactoryMethod extends AbstractFactoryMethod
{
    private $context = "OReilly";

    function makePHPBook($param)
    {
        $book = NULL;
        switch ($param) {
            case "us":
                $book = new OReillyPHPBook;
                break;
            case "other":
                $book = new SamsPHPBook;
                break;
            default:
                $book = new OReillyPHPBook;
                break;
        }
        return $book;
    }
}
