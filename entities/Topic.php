<?php

final class Topic extends Model
{
    protected $table_name = 'topic';

    public static function getAll() : array | false
    {
        return self::$db->query("SELECT * FROM `topic`")->fetchAll();
    }

    public static function getById(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `topic` WHERE `id` = {$id}")->fetchAll();
    }
}