<?php

namespace Item\Book;

use Item\Item;

/**
 *Class that implements Item as a Book
 *
 *@autor Iago Segade <a19iagosr@iessanclemente.net>
 *@date 2020-10-02
 */

class Book extends Item
{
    var $author;
    var $title;
    var $pages;
    var $date;

    public function __construct($title = '', $pages = '', $date = '', $author = 'Anonymus', $id = null)
    {
        $this->author = $author;
        $this->title = $title;
        $this->$pages = $pages;
        $this->date = $date;
    }

    public function __toString()
    {
        $str = "Author: " . $this->author;
        $str .= "<br/>Title: " . $this->title;
        $str .= "<br/>Pages: " . $this->pages;
        $str .= "<br/>Date: " . $this->date;
        $str .= "<br/>ID: " . $this->id;
    }
}
