<?php
require_once('../entities/setting.php');
require_once('../DatabaseManager.php');
class settingsModel{
    
    public function insert(Settings $settings)
    {
        $attributes=get_object_vars($settings);
        $sql='INSERT INTO settings '.Settings::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);

    }

    public function update($id,$settings)
    {
        array_push($settings,$id);
        DatabaseManager::update('UPDATE settings '.Settings::$updateStruct,$settings);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from settings where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from settings');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from settings where id ='.$id);
        return $object;
    }

}