<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 07.10.2018
 * Time: 23:52
 */


class dbTable
{
    public $name;
    public $type;

    public function __construct($name, $type)
    {
        $this->type = $type;
        $this->name = $name;

    }
}