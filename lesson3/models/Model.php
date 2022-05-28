<?php

namespace app\models;

use app\engine\Db;
use app\interfaces\IModel;

abstract class Model implements IModel
{

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function insert(): Model
    {
        $data_to_insert = [];
        foreach ($this as $key => $value) {
            if ($key !== 'id' && $value !== null) {
                $data_to_insert[$key] = $value;
            }
        }
        $keys_str = implode(", ", array_keys($data_to_insert));

        $tableName = $this->getTableName();

        $sql = "INSERT INTO `{$tableName}` ("
            . implode(", ", array_keys($data_to_insert)) .
            ") VALUES (" .
                implode(", ", array_fill(0, count($data_to_insert), '?')) .
            ")";

        Db::getInstance()->execute($sql, $data_to_insert);
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    public function update()
    {
        return $this;
    }

    public function delete() {
        $id = $this->id;
        $sql = "DELETE FROM {$this->getTableName()} WHERE id = $id";
        return Db::getInstance()->execute($sql);
    }

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = $id";
        return Db::getInstance()->queryOneObject($sql, [], static::class);
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return Db::getInstance()->queryAll($sql);
    }

    protected abstract function getTableName();


}