<?php


namespace App\Http\Services\Factory\Catalog;


use App\Http\Services\Library\GetAllHm;
use App\Http\Services\Warehouse\Catalog;

class ServiceAllHm extends GetAllHm
{
    use Catalog;
    protected $withEntity = 'seo';
}
