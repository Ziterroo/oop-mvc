<?php


namespace App\Models;

use App\Db;

abstract class Model
{
    public const TABLE = '';

    public int $id;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $datum) {
            $this->$key = $datum;
        }
    }

    public static function findAll(): array
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id): ?object
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = $db->query($sql, static::class, [':id' => $id]);
        return empty($data) ? null : $data[0];
    }

    public function insert()
    {
        $properties = get_object_vars($this);

        $values = [];
        $binds = [];
        $data = [];

        foreach ($properties as $key => $property) {
            $values[] = $key;
            $binds[] = ':' . $key;
            $data[':' . $key] = $property;
        }

        $sql = 'INSERT INTO ' . static::TABLE
            . ' (' . implode(',', $values) . ')'
            . ' VALUES(' . implode(',', $binds) . ')';
        $db = Db::instance();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }
}