<?php

class Db extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=forum', 'root', '');
    }
}