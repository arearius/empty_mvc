<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 06.10.2018
 * Time: 20:14
 */

class Db
{
    private static $connection;

    protected static function connect($sql_user, $sql_host, $sql_pass, $sql_dbname)
    {
        if (self::$connection == null) {
            //echo "<br>try connect db";
            self::$connection = new \mysqli($sql_host, $sql_user, $sql_pass, $sql_dbname);
            //echo "try connect done";

            if(self::$connection->connect_errno){
                echo 'База данных не доступна';
                return true;
            }

            //print_r (self::$connection);
        }
        //Настройка подключения к БД
    }

    protected static function createTables()
    {
        $sql = "CREATE TABLE `info` (`id` INT(11) NOT NULL AUTO_INCREMENT, `text` LONGTEXT NOT NULL, PRIMARY KEY(`id`))";
        self::$connection->query($sql);
        $sql = "CREATE TABLE `debug` (`id` INT(11) NOT NULL AUTO_INCREMENT, `text` LONGTEXT NOT NULL, PRIMARY KEY(`id`))";
        self::$connection->query($sql);
        $sql = "CREATE TABLE `errors` (`id` INT(11) NOT NULL AUTO_INCREMENT, `text` LONGTEXT NOT NULL, PRIMARY KEY(`id`))";
        self::$connection->query($sql);
    }

    protected static function createTable($name, $fields, $primaryKey)
    {
        $sql = "CREATE TABLE `{$name}` (";
        $fieldNumber = 0;
        foreach ($fields as $field) {
            if ($fieldNumber < count($fields) - 1) {
                $sql += "`{$field->name}` {$field->type}, ";
            }
            $sql += "`{$field->name}` {$field->type} ";
        }

        $sql += " PRIMARY KEY(`{$primaryKey})";
        echo "trying create table $sql";

        //self::$connection->query($sql);

    }

    protected static function getAllFromTable($table)
    {
        $sql = "SELECT * FROM $table";
        self::$connection->query($sql);
    }

    protected static function getSelectFromTable($table)
    {

    }

    protected static function writeToTable($table)
    {

    }

    protected static function insert($data, $table)
    {
        $sql = "INSERT INTO `$table` (`text`) VALUES ('$data')";
        self::sql_query($sql);
    }

    private static function sql_query($sql)
    {
        return self::$connection->query($sql);
    }

}