<?php

final class Post extends Model
{
    protected string $table_name = 'post';

    public static function getAll() : array | false
    {
        return self::$db->query("SELECT * FROM `post`")->fetchAll();
    }

    public static function getById(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `post` WHERE `id` = {$id}")->fetchAll();
    }

    public static function getByUser(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `post` WHERE `user_id` = {$id}")->fetchAll();
    }

    public static function getByTopic(int $id) : array | false
    {
        return self::$db->query("SELECT * FROM `post` WHERE `topic_id` = {$id}")->fetchAll();
    }
}