<?php

namespace app\models;

use app\engine\Db;

abstract class DBModel extends Model
{
    protected abstract static function getTableName();

    public function insert(): Model
    {
        $params = [];
        $columns = [];

        foreach ($this->props as $key => $value) {
            $params[":" . $key] = $this->$key;
            $columns[] = $key;

            $this->props[$key] = false;
        }

        $columns = implode(', ', $columns);
        $values = implode(', ', array_keys($params));


        $tableName = static::getTableName();

        $sql = "INSERT INTO `{$tableName}`($columns) VALUES ($values)";


        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    public function update(): Model
    {
        $params = [];
        $tableName = static::getTableName();
        $sql = "UPDATE `{$tableName}` SET ";
        $ds = ', ';

        foreach ($this->props as $key => $value) {
            if ($value) {
                $params[":" . $key] = $this->$key;
                $sql .= "`$key` = :$key, ";

                $this->props[$key] = false;
            }
        }
        if ($ds == substr($sql, -2)) {
            $sql = substr($sql, 0, -2);
        }

        $params[":id"] = (int)$this->id;
        $sql .= " WHERE `id` = :id";
        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    public function save() {
        $this->id ? $this->update() : $this->insert();
    }

    public function delete() {
        $id = $this->id;
        $sql = "DELETE FROM {static::getTableName()} WHERE id = $id";
        return Db::getInstance()->execute($sql);
    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }

    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public static function getLimit($limit) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT 0, ?";
        return Db::getInstance()->queryLimit($sql, $limit);
    }
}