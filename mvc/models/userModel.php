<?php
require_once('../entities/user.php');
require_once('../DatabaseManager.php');
class UserModel{
    
    public function insert(User $user)
    {
        $attributes=get_object_vars($user);
        $sql='INSERT INTO user '.User::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }

        DatabaseManager::insert($sql,$values);
        $id = DatabaseManager::query('SELECT max(id) as id from user');
        $object = DatabaseManager::query('SELECT * from user where id ='.$id[0]['id']);
        return $object;
    }

    public function update($id,$user)
    {
        array_push($user,$id);
        echo (json_encode($user));
        DatabaseManager::update('UPDATE user '.User::$updateStruct,$user);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from user where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from user');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from user where id ='.$id);
        return $object;
    }

}