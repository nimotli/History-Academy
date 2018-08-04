<?php

class Category{

    public $id;
    public $name;
    public static $sqlStruct='(name) values(?)';
    public static $updateStruct='set name=? where id=?';

    function __construct($values)
    {
        $this->name=$values['name'];
    }


}