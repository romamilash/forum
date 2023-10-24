<?php

abstract class Model
{
    protected static Db $db;
    protected string $table_name;

    protected static function getAll()
    {}

    protected static function getById(int $id)
    {}

    protected static function updateById()
    {}

    protected static function deleteById()
    {}
}