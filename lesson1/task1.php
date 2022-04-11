<?php

class Product
{
    public $title;
    public $description;
    public $images = [];
    public $price;
    protected $article_number; // артикул
    public $rating = 0;
    public $average_rating = 0;
    public $brand_name;
    public $reviews = []; // отзывы
    public $issues = []; // вопросы по продукту
    public $note; // примечание к продукту
    public $status;
    public $count_availiable;
    public $date_of_release; // когда вышел
    public $views; // количество просмотров
    public $count_in_users_basket; // количество товаров в корзинах пользователей
    public $count_of_estimations = 0;
    public $collection;

    public function __construct(
        $title = null,
        $description = null,
        $images = [],
        $price = null,
        $article_number = null,
        $rating = 0,
        $brand_name = null,
        $reviews = [],
        $issues = [],
        $note = null,
        $status = null,
        $count_availiable = null,
        $date_of_release = null,
        $views = null,
        $count_in_users_basket = null,
        $count_of_estimations = 0,
        $average_rating = 0,
        $collection = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->images = $images;
        $this->price = $price;
        $this->article_number = $article_number;
        $this->rating = $rating;
        $this->brand_name = $brand_name;
        $this->reviews = $reviews;
        $this->issues = $issues;
        $this->note = $note;
        $this->status = $status;
        $this->count_availiable = $count_availiable;
        $this->date_of_release = $date_of_release;
        $this->views = $views;
        $this->count_in_users_basket = $count_in_users_basket;
        $this->count_of_estimations = $count_of_estimations;
        $this->average_rating = $average_rating;
        $this->collection = $collection;
    }

    public function add_image($image)
    {
        $this->images[] = $image;
    }

    public function add_review($review)
    {
        $this->reviews[] = $review;
    }

    public function add_issue($issue)
    {
        $this->issues[] = $issue;
    }

    public function change_rating($user_rating)
    {
        $this->rating += $user_rating;
        $this->count_of_estimations += 1;
        $this->average_rating = $this->rating / $this->count_of_estimations;
    }
    
    public function info()
    {
        return;
    }
}

class T_Shirt extends Product
{
    public $availiable_sizes = [];
    public $availiable_colors = [];
    public $materials = [];

    public function __construct(
        $title = null, $description = null, $images = [], $price = null,
        $article_number = null, $rating = 0, $brand_name = null, $reviews = [],
        $issues = [], $note = null, $status = null, $count_availiable = null,
        $date_of_release = null, $views = null, $count_in_users_basket = null,
        $count_of_estimations = 0, $average_rating = 0, $collection = null,
        $availiable_sizes = [
            48 => false,
            50 => false,
            52 => false,
        ],
        $availiable_colors = ['black' => false, 'white' => false, 'red' => false],
        $materials = []
    ) {
        parent::__construct(
            $title, $description, $images, $price, $article_number, $rating, $brand_name, 
            $issues, $note, $status, $count_availiable, $date_of_release, $reviews,
            $views, $count_in_users_basket, $count_of_estimations, $average_rating, $collection
        );
        $this->availiable_sizes = $availiable_sizes;
        $this->availiable_colors = $availiable_colors;
        $this->materials = $materials;
    }

    public function toggleAvailiable_size($size)
    {
        $this->availiable_sizes[$size] = !$this->availiable_sizes[$size];
    }

    public function toggleAvailiable_color($color)
    {
        $this->availiable_colors[$color] = !$this->availiable_colors[$color];
    }
}


$bb = new Product;
var_dump($bb);

// Оценка продукта пользователем
$bb->change_rating(5);
$bb->change_rating(4);
var_dump($bb);

$tS = new T_Shirt('футболка', 'simple');
var_dump($tS);

$tS->change_rating(1);
$tS->change_rating(4);
$tS->toggleAvailiable_size(52);
$tS->toggleAvailiable_color('black');
var_dump($tS);