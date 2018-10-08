<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 06.10.2018
 * Time: 22:50
 */

class Fonds extends db
{
    private $tablesExist = true;

    public function __construct()
    {
        //Настройки подключения к базе MySQl
        define("sql_user", "root");//Логин
        define("sql_host", "localhost");//Адрес сервера
        define("sql_pass", "");//Пароль
        define("sql_dbname", "testmvc_fonds");//Пароль

        echo parent::connect(sql_user, sql_host, sql_pass, sql_dbname);


        if (!$this->tablesExist) {

            //сздает таблицы для логера
            //parent::createTables();
        }

    }

    public function createFondsTable()
    {
        $fields = array();

        $fields[] = new dbField('id', 'INT(11) NOT NULL AUTO_INCREMENT');
        $fields[] = new dbField('text', 'LONGTEXT NOT NULL');

        $primaryKay = "PRIMARY KEY(`id`)";

        parent::createTable("data", $fields, $primaryKay);

    }


}