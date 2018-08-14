<?php
require_once('../entities/userLives.php');
require_once('../DatabaseManager.php');
class userLiveModel{
    
    public function insert(UserLive $userLive)
    {
        $attributes=get_object_vars($userLive);
        $sql='INSERT INTO userlives'.UserLive::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$userLive)
    {
        array_push($userLive,$id);
        DatabaseManager::update('UPDATE userlives'.UserLive::$updateStruct,$userLive);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from userliveswhere id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from userlives');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from userliveswhere id ='.$id);
        return $object;
    }

}