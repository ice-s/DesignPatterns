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
use Entities\VisualQuickStartPHPBook;

class SamsFactoryMethod extends AbstractFactoryMethod
{
    private $context = "Sams";

    function makePHPBook($param)
    {
        $book = NULL;
        switch ($param) {
            case "us":
                $book = new SamsPHPBook;
                break;
            case "other":
                $book = new OReillyPHPBook;
                break;
            case "otherother":
                $book = new VisualQuickStartPHPBook;
                break;
            default:
                $book = new SamsPHPBook;
                break;
        }
        return $book;
    }
}
