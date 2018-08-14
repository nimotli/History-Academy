<?php

class UserLive{

    public $id;
    public $user;
    public $live;
    public static $sqlStruct='(user,live) values(?,?)';
    public static $updateStruct='set user=?,live=? where id=?';

    function __construct($values)
    {
        $this->user=$values['user'];
        $this->live=$values['live'];
    }


}