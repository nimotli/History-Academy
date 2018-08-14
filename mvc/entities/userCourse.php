<?php

class UserCourse{

    public $id;
    public $user;
    public $course;
    public static $sqlStruct='(user,course) values(?,?)';
    public static $updateStruct='set user=?,course=? where id=?';

    function __construct($values)
    {
        $this->user=$values['user'];
        $this->course=$values['course'];
    }


}