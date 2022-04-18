<?php
namespace app\models;


class Product extends Model
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $collection;
    public $options;
    public $views;
    public $preview_photo_name;


    public function __construct($name = null, $description = null, $price = null)
    {
        $this->title = $name;
        $this->description = $description;
        $this->price = $price;
    }


    protected function getTableName(): string
    {
        return 'items';
    }
}