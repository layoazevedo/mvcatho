<?php

namespace MvCatho\System;

abstract class AbstractModel
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \PDO("mysql:host={localhost};dbname={aeskaeno}", 'root', 'root',
            array (
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
        );
    }
}