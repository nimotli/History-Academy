<?php

    class DatabaseManager{

        public function connect()
        {
            $host = '127.0.0.1';
            $db   = 'academy';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);
            return $pdo;
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