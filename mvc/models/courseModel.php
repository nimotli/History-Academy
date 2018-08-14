<?php
require_once('../entities/course.php');
require_once('../DatabaseManager.php');
class CourseModel{
    
    public function insert(Course $course)
    {
        $attributes=get_object_vars($course);
        $sql='INSERT INTO course '.Course::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$course)
    {
        array_push($course,$id);
        DatabaseManager::update('UPDATE course '.Course::$updateStruct,$course);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from course where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from course');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from course where id ='.$id);
        return $object;
    }

}