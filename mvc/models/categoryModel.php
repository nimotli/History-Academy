<?php
require_once('../entities/category.php');
require_once('../DatabaseManager.php');
class categoryModel{
    
    public function insert(Category $category)
    {
        $attributes=get_object_vars($category);
        $sql='INSERT INTO category '.Category::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
    }

    public function update($id,$category)
    {
        array_push($category,$id);
        DatabaseManager::update('UPDATE category '.Category::$updateStruct,$category);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from category where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from category');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from category where id ='.$id);
        return $object;
    }

}