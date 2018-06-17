<?php
/**
 * Created by PhpStorm.
 * User: ICE
 * Date: 6/17/2018
 * Time: 1:31 PM
 */

namespace Entities;

use EntitiesAbstracts\AbstractPHPBook;

class VisualQuickStartPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    function __construct()
    {
        $this->author = 'Larry Ullman';
        $this->title = 'PHP for the World Wide Web';
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}