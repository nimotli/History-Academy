<?php

class AnalysisAnswer{

    public $id;
    public $answer;
    public $analysis;
    public static $sqlStruct='(answer,analysis) values(?,?)';
    public static $updateStruct='set answer=?,analysis=? where id=?';

    function __construct($values)
    {
        $this->answer=$values['answer'];
        $this->analysis=$values['analysis'];
    }


}