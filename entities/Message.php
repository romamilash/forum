<?php

final class Message extends Model
{
    protected $table_name = 'message';

    public static function getAll() : array | false
    {
        return self::$db->query("SELECT * FROM `message`")->fetchAll();
    }

    public static function getById(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `message` WHERE `id` = {$id}")->fetchAll();
    }

    public static function getByUser(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `message` WHERE `user_id` = {$id}")->fetchAll();
    }

    public static function getByTopic(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `message` WHERE `topic_id` = {$id}")->fetchAll();
    }
}