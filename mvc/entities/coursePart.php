<?php

class CoursePart{

    public $id;
    public $name;
    public $description;
    public $content;
    public $course;
    public static $sqlStruct='(name,description,content,course) values(?,?,?,?)';
    public static $updateStruct='set name=?,description=?,content=?,course=? where id=?';

    function __construct($values)
    {
        $this->name=$values['name'];
        $this->description=$values['description'];
        $this->content=$values['content'];
        $this->course=$values['course'];
    }


}