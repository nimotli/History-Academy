<?php
require_once('../entities/userCourse.php');
require_once('../DatabaseManager.php');
class userCourseModel{
    
    public function insert(UserCourse $userCourse)
    {
        $attributes=get_object_vars($userCourse);
        $sql='INSERT INTO usercourse'.UserCourse::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$userCourse)
    {
        array_push($userCourse,$id);
        DatabaseManager::update('UPDATE usercourse'.UserCourse::$updateStruct,$userCourse);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from usercourse where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from usercourse');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from usercourse where id ='.$id);
        return $object;
    }

}