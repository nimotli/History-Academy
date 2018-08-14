<?php
require_once('../entities/coursePart.php');
require_once('../DatabaseManager.php');
class CoursePartModel{
    
    public function insert(CoursePart $coursePart)
    {
        $attributes=get_object_vars($coursePart);
        $sql='INSERT INTO coursepart '.CoursePart::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$coursePart)
    {
        array_push($coursePart,$id);
        DatabaseManager::update('UPDATE coursepart '.CoursePart::$updateStruct,$coursePart);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from coursepart where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from coursepart ');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from coursepart where id ='.$id);
        return $object;
    }

}