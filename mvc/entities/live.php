<?php

class Live{

    public $id;
    public $name;
    public $description;
    public $date;
    public $state;
    public $price;
    public static $sqlStruct='(name,description,date,state,price) values(?,?,?,?,?)';
    public static $updateStruct='set name=?, description=?,date=?,state=?,price=? where id=?';

    function __construct($values)
    {
        $this->name=$values['name'];
        $this->description=$values['description'];
        $this->date=$values['date'];
        $this->state=$values['state'];
        $this->price=$values['price'];
    }


}