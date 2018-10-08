<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 06.10.2018
 * Time: 20:15
 */

class Logger extends Db
{
    const INFO = "info";
    const DEBUG = "debug";
    const ERROR = "errors";
    private $tablesExist = true;
    private $enabled = true;

    public function __construct()
    {
        //Настройки подключения к базе MySQl
        define("sql_user", "root");//Логин
        define("sql_host", "localhost");//Адрес сервера
        define("sql_pass", "");//Пароль
        define("sql_dbname", "testmvc_logs");//Пароль

        //echo "<br>try connect";
        echo parent::connect(sql_user, sql_host, sql_pass, sql_dbname);
        //echo "<br>Connecct done";


        if (!$this->tablesExist) {
            echo "try create tables";
            parent::createTables();
        }

    }

    public function log($message, $type = "info")
    {
        //echo "<br> try insert log in table $type";
        parent::insert($message, $type);
    }

    public function disable()
    {
        $this->enabled = false;
    }

    public function enable()
    {
        $this->enabled = true;
    }

    public function status()
    {
        return $this->enabled;
    }

}