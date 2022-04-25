<?php
namespace app\models;


class Product extends DBModel
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $collection;
    protected $options;
    protected $views;
    protected $preview_photo_name;

    protected $props = [
        'title' => false,
        'description' => false,
        'price' => false,
        'collection' => false,
        'options' => false,
        'views' => false,
        'preview_photo_name' => false,
    ];


    public function __construct($name = null, $description = null, $price = null)
    {
        $this->title = $name;
        $this->description = $description;
        $this->price = $price;
    }


    public static function getTableName(): string
    {
        return 'items';
    }
}