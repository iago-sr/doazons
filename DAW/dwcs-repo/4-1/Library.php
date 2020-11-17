<?php

/**
 *Class for administrate the catalog of a Library.
 *
 *@autor Iago Segade <a19iagosr@iessanclemente.net>
 *@date 2020-10-02
 */

namespace Library;

use Item\Item;
use Item\Book\Book;
use Item\DVD\DVD;
use Item\Magazine\Magazine;


class Library
{
    var $name;
    var $address;
    var $phoneNumber;
    var $collection = array();
    static $libraries = 0;

    public function __construct($name = '', $address = '', $phoneNumber = '')
    {
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }
    /**
     * * Register any type of document in the allowed formats.
     */
    function register($item)
    {
        if (is_a($item, 'DVD') || is_a($item, 'Magazine') || is_a($item, 'Book')) {
            $item->setID(sizeof($this->collection) + 1);
            array_push($this->collection, $item);
        }
    }
    /***
     * 
     *  * List all the documents in the library.
     ***/
    function list()
    {
        print_r($this->collection);
    }
    /***
     * 
     * Show library information.
     ***/
    function info()
    {
        echo "Name= $this->name";
        echo "<br/>Address= $this->address";
        echo "<br/>Phone Number= $this->phoneNumber";
    }
    /***
     *Number of libraries created.
     ***/
    function instances()
    {
        echo "There are " . Library::$libraries . " libraries.";
    }
    /***
     *  * Delete a document by its ID.
     ***/
    function remove($id)
    {
        unset($this->collection[$id]);
    }
    /***
     *
     ***/

    public function colLen()
    {
        return sizeof($this->collection);
    }
}
