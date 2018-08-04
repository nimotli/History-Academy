<?php
require_once('../entities/coursePart.php');
require_once('../DatabaseManager.php');
class coursePartModel{
    
    public function insert(CoursePart $coursePart)
    {
        $attributes=get_object_vars($coursePart);
        $sql='INSERT INTO coursePart '.CoursePart::$sqlStruct;
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
        DatabaseManager::update('UPDATE coursePart '.CoursePart::$updateStruct,$coursePart);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from coursePart where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from coursePart');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from coursePart where id ='.$id);
        return $object;
    }

}