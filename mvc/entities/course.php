<?php

class Course{

    public $id;
    public $name;
    public $description;
    public $category;
    public $price;
    public static $sqlStruct='(name,description,category,price) values(?,?,?,?)';
    public static $updateStruct='set name=?,description=?,category=?,price=? where id=?';

    function __construct($values)
    {
        $this->name=$values['name'];
        $this->category=$values['category'];
        $this->description=$values['description'];
        $this->price=$values['price'];
    }


}