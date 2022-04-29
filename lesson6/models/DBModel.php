<?php

namespace app\models;

use app\engine\Db;

abstract class DBModel extends Model
{
    protected abstract static function getTableName();

    public static function getWhere($name, $value) {
        $tableName = static::getTableName();
        $params[":" . $name] = $value;

        $sql = "SELECT * FROM `{$tableName}` where $name = :$name";
        return Db::getInstance()->queryOneObject($sql, [':login' => $value], static::class);
    }

    public static function getCountWhere($name, $value)
    {
        $tableName = static::getTableName();
        $sql = "SELECT count(id) as count FROM {$tableName} WHERE {$name} = :value";
        return Db::getInstance()->queryOne($sql, ['value' => $value])['count'];
    }

    public function insert($register = null): Model
    {
        if ($register) {
            $user = User::getWhere('login', $this->login);
            if ($user->id) {
                die('пользователь с таким логином уже существует');
            }
        }

        $params = [];
        $columns = [];

        foreach ($this->props as $key => $value) {
            if ($this->$key) {
                $params[":" . $key] = $this->$key;
                $columns[] = $key;

                $this->props[$key] = false;
            }
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

    public function save($register = null) {
        if ($register) {
            $this->insert($register);
        } else {
            $this->id ? $this->update() : $this->insert();
        }
    }

    public function delete()
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM $tableName WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $params = ['id' => (int)$id];
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOneObject($sql, $params, static::class);
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
