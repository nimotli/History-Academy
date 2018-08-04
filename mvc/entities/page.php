<?php

class Page{

    public $id;
    public $name;
    public $content;
    public static $sqlStruct='(name,content) values(?,?)';
    public static $updateStruct='set name=?, content=? where id=?';

    function __construct($values)
    {
        $this->name=$values['name'];
        $this->content=$values['content'];
    }


}