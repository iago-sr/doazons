<?php


namespace Item\Magazine;

use Item\Item;

/**
 *Class that implements Item as a Magazine
 *
 *@autor Iago Segade <a19iagosr@iessanclemente.net>
 *@date 2020-10-02
 */

class Magazine extends Item
{
    var $title;
    var $pages;
    var $date;

    public function __construct($title = '', $pages = '', $date = '', $id = null)
    {
        $this->title = $title;
        $this->pages = $pages;
        $this->date = $date;
    }
    public function __toString()
    {
        $str = "Title: " . $this->title;
        $str .= "<br/>Pages: " . $this->pages;
        $str .= "<br/>Date: " . $this->date;
        $str .= "<br/>ID: " . $this->id;
    }
}
