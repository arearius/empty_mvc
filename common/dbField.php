<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 07.10.2018
 * Time: 23:52
 */


class dbField
{
    public $name;
    public $type;
    public $isPrimary;


    public function __construct($name, $type)
    {
        $this->type = $type;
        $this->name = $name;
    }
}