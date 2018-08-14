<?php
require_once('../entities/live.php');
require_once('../DatabaseManager.php');
class liveModel{
    
    public function insert(Live $live)
    {
        $attributes=get_object_vars($live);
        $sql='INSERT INTO live '.Live::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$live)
    {
        array_push($live,$id);
        DatabaseManager::update('UPDATE live '.Live::$updateStruct,$live);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from live where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from live');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from live where id ='.$id);
        return $object;
    }

}