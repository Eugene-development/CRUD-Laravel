<?php


namespace App\Http\Services\Factory\Navigation\Head;


use App\Http\Services\Library\GetAllHmHm;
use App\Http\Services\Warehouse\Head;

class ServiceAllHmHm extends GetAllHmHm
{
    use Head;
    protected $firstEntity = 'text';
    protected $secondEntity = 'rubric';

}
