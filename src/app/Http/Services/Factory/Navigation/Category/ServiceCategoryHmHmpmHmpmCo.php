<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Services\Library\GetWhHmHmpmHmpmCo;
use App\Http\Services\Warehouse\Category;

class ServiceCategoryHmHmpmHmpmCo extends GetWhHmHmpmHmpmCo
{
    use Category;

    protected $firstEntity = 'product';
//    protected $secondEntity = 'category';
    protected $thirdEntity = 'text';

}
