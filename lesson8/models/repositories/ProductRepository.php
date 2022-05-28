<?php

namespace app\models\repositories;

use app\models\entities\Product;
use app\models\Repository;

class ProductRepository extends Repository
{
    protected function getTableName(): string
    {
        return 'items';
    }

    protected function getEntityClass(): string
    {
        return Product::class;
    }
}