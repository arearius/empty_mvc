<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 05.10.2018
 * Time: 21:50
 */

$data = explode('/' ,$_REQUEST['uri']);
$_REQUEST['controller'] = $data[1];
$_REQUEST['action'] = $data[2];
//print_r($data);

//print_r($_GET);
//print_r($_REQUEST);

//echo "test mvc server";
//echo "</pre>";
//echo $_SERVER['DOCUMENT_ROOT'];

//Подключаем настройки проекта
include $_SERVER['DOCUMENT_ROOT']. "/config.php";
//Загружаем базовые функции
//include $_SERVER['DOCUMENT_ROOT']."/model/functions.php";
//Загружаем класс для работы с базой данных
include $_SERVER['DOCUMENT_ROOT']."/model/db.php";
//Загружаем реестр
include $_SERVER['DOCUMENT_ROOT'] . "/core/app.php";
//Включение автозагрузки
include $_SERVER['DOCUMENT_ROOT'] . "/core/autoload.php";

//$logger = new Logger();
//$logger->log("index.php start");

//Сохранение данных запроса
//echo "<br>Getting controller<br>";
App::get('AppController')->setRequest($_REQUEST);
//echo "<br>Getting controller2<br>";
if ($type == 'ajax') {
    App::get('AppController')->ajax($_REQUEST['controller'], $_REQUEST['action'], $_REQUEST['send']);
} else {
    //echo "Getting controller app ";
    App::get('AppController')->page($_REQUEST['controller'], $_REQUEST['action'],$_REQUEST);
}