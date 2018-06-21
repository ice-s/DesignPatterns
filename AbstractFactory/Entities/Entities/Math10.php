<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:31 PM
 */

namespace Entities\Entities;

use Entities\EntityAbstracts\BookAbstracts;
use Entities\EntityInterfaces\BookInterface;

class Math10 extends BookAbstracts implements BookInterface
{
    public function showInfo()
    {
        echo "Author :" . $this->getAuthor();
        echo "Total Page :" . $this->getPageNumber();
    }
}