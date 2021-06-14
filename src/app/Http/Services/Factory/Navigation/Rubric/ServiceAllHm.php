<?php


namespace App\Http\Services\Factory\Navigation\Rubric;


use App\Http\Services\Library\GetAllHm;
use App\Http\Services\Warehouse\Rubric;

class ServiceAllHm extends GetAllHm
{
    use Rubric;
    protected $withEntity = 'seo';
}
