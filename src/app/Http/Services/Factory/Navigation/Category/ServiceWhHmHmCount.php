<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Services\Library\GetWhHmHmCount;
use App\Http\Services\Warehouse\Category;

class ServiceWhHmHmCount extends GetWhHmHmCount
{
    use Category;

    protected $firstEntity = 'product';
    protected $secondEntity = 'category';
    protected $thirdEntity = 'text';
}
