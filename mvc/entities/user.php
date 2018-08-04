<?php

class User{

    public $id;
    public $username="";
    public $password;
    public $name;
    public $secondName;
    public $email;
    public $address;
    public $phone;
    public $admin=0;
    public static $sqlStruct='(username,password,name,secondName,email,address,phone,admin) values(?,?,?,?,?,?,?,?)';
    public static $updateStruct='set username=?,password=?,email=?,name=?,secondName=?,phone=?,address=?,admin=? where id=?';
    function __construct($values)
    {
        $this->username=$values['username'];
        $this->name=$values['name'];
        $this->secondName=$values['secondName'];
        $this->email=$values['email'];
        $this->address=$values['address'];
        $this->phone=$values['phone'];
        $this->password=password_hash($values['password'], PASSWORD_DEFAULT);
    }


}