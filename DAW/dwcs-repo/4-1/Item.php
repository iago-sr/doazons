<?php

/**
 *Abstract class for general item in the library
 *
 *@autor Iago Segade <a19iagosr@iessanclemente.net>
 *@date 2020-10-02
 */

namespace Item;

abstract class Item
{
    public $id;
    public function setID($id)
    {
        $this->id = $id;
    }
}
