<?php
require_once('../entities/liveMsg.php');
require_once('../DatabaseManager.php');
class liveMsgModel{
    
    public function insert(LiveMsg $liveMsg)
    {
        $attributes=get_object_vars($liveMsg);
        $sql='INSERT INTO liveMsg '.LiveMsg::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$liveMsg)
    {
        array_push($liveMsg,$id);
        DatabaseManager::update('UPDATE liveMsg '.LiveMsg::$updateStruct,$liveMsg);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from liveMsg where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from liveMsg');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from liveMsg where id ='.$id);
        return $object;
    }
    public function findLive($id)
    {
        $object = DatabaseManager::query('SELECT * from liveMsg where live ='.$id);
        return $object;
    }

}