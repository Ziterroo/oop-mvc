<?php


namespace App\Models;

use App\Db;

abstract class Model
{
    public const TABLE = '';

    public int $id;

    /**
     * @return array
     */
    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query( $sql, static::class, []);
    }
}