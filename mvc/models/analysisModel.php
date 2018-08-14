<?php
require_once('../entities/analysis.php');
require_once('../DatabaseManager.php');
class analysisModel{
    
    public function insert(Analysis $analysis)
    {
        $attributes=get_object_vars($analysis);
        $sql='INSERT INTO analysis '.Analysis::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);
        $id = DatabaseManager::query("Select max(id) as 'id' from analysis");
        $object=DatabaseManager::query('Select * from analysis where id = '.$id[0]['id']);
        return $object[0];
    }

    public function update($id,$analysis)
    {
        array_push($analysis,$id);
        DatabaseManager::update('UPDATE analysis '.Analysis::$updateStruct,$analysis);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from analysis where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from analysis');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from analysis where id ='.$id);
        return $object;
    }

}