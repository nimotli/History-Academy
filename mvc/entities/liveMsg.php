<?php

class LiveMsg{

    public $id;
    public $user;
    public $live;
    public $msg;
    public $type;
    public static $sqlStruct='(user,live,msg,type) values(?,?,?,?)';
    public static $updateStruct='set user=?, live=?,msg=?,type=? where id=?';

    function __construct($values)
    {
        $this->user=$values['user'];
        $this->live=$values['live'];
        $this->msg=$values['msg'];
        $this->type=$values['type'];
    }


}