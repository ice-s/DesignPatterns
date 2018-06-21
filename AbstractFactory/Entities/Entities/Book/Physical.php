<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:31 PM
 */

namespace Entities\Entities\Book;

use Entities\EntityAbstracts\Book as BookAbstract;
use Entities\EntityInterfaces\Book as BookInterface;

class Physical extends BookAbstract implements BookInterface
{
    public function showInfo()
    {
        echo "Author :" . $this->getAuthor();
        echo "Total Page :" . $this->getPageNumber();
    }
}