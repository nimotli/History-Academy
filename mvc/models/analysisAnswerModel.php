<?php
require_once('../entities/analysisAnswer.php');
require_once('../DatabaseManager.php');
class analysisAnswerModel{
    
    public function insert(AnalysisAnswer $analysisAnswer)
    {
        $attributes=get_object_vars($analysisAnswer);
        $sql='INSERT INTO analysisAnswer '.AnalysisAnswer::$sqlStruct;
        $values=array();
        foreach(array_keys($attributes) as $attribute)
        {
            if($attribute!='id')
                array_push($values,$attributes[$attribute]);
        }
        DatabaseManager::insert($sql,$values);

    }

    public function update($id,$analysisAnswer)
    {
        array_push($analysisAnswer,$id);
        DatabaseManager::update('UPDATE analysisAnswer '.AnalysisAnswer::$updateStruct,$analysisAnswer);
    }

    public function delete($id)
    {
        DatabaseManager::delete('DELETE from analysisAnswer where id = ?',$id);
    }

    public function all()
    {
        return DatabaseManager::query('SELECT * from analysisAnswer');
    }

    public function find($id)
    {
        $object = DatabaseManager::query('SELECT * from analysisAnswer where id ='.$id);
        return $object;
    }

}