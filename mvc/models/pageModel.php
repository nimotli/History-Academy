<?php
require_once('../entities/page.php');
require_once('../DatabaseManager.php');
class PageModel{
    
    public function insert(Page $page)
    {
        $attributes=get_object_vars($page);
        $sql='INSERT INTO page '.Page::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$page)
    {
        array_push($page,$id);
        DatabaseManager::update('UPDATE page '.Page::$updateStruct,$page);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from page where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from page');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from page where id ='.$id);
        return $object;
    }

}