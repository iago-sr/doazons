<?php

namespace Item\DVD;

use Item\Item;

/**
 *Class that implements Item as a Dvd
 *
 *@autor Iago Segade <a19iagosr@iessanclemente.net>
 *@date 2020-10-02
 */

class DVD extends Item
{
    var $format;
    var $date;
    var $copies;

    public function __construct($format = 'MPEG-2', $date = '', $copies = '', $id = null)
    {
        $this->format = $format;
        $this->date = $date;
        $this->copies = $copies;
    }

    public function __toString()
    {
        $str = "Format: " . $this->format;
        $str .= "<br/>Date: " . $this->date;
        $str .= "<br/>Copies: " . $this->copies;
        $str .= "<br/>ID: " . $this->id;
    }
}
