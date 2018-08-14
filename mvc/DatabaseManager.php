<?php

    class DatabaseManager{

        public static function connect()
        {
    $dbh = new PDO("mysql:host=localhost;dbname=academy",'root','');
             return $dbh ;
        }        

        public static function query($sql)
        {
            $pdo=DatabaseManager::connect();

            $stm=$pdo->query($sql);
            $pdo=null;
            return $stm->fetchAll();
        }

        public static function insert($sql,$values)
        {
            $pdo=DatabaseManager::connect();
            $sth =$pdo->prepare($sql);
            $sth->execute($values);
            $pdo=null;
        }

        public static function update($sql,$values)
        {
            $pdo=DatabaseManager::connect();
            $sth =$pdo->prepare($sql);
            $sth->execute($values);
            $pdo=null;
        }

        public static function delete($sql,$value)
        {
            $pdo=DatabaseManager::connect();
            $pdo->prepare($sql)->execute([$value]);
            $pdo=null;
        }
        
    }

?>