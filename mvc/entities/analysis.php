<?php

class Analysis{

    public $id;
    public $type;
    public $info;
    public $state;
    public $user;
    public $price;
    public static $sqlStruct='(type,info,state,user,price) values(?,?,?,?,?)';
    public static $updateStruct='set user=?,state=?,type=?,info=?,price=? where id=?';

    function __construct($values)
    {
        $this->type=$values['type'];
        $this->state=$values['state'];
        $this->user=$values['user'];
        $this->info=$values['info'];
        $this->price=$values['price'];
    }


}