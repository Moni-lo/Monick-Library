<?php 

class Conection 
{
    public static function conect($path) {
        $conf = parse_ini_file($path);

        $dsn = "mysql:host={$conf['host']};dbname={$conf['dbname']}";

        return $pdo = new PDO(
            $dsn,
            $conf['user'],
        );
    }
}