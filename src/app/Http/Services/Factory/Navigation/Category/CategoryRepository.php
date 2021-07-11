<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Contracts\Navigation\Category;
use App\Http\Services\Factory\Repository;

final class CategoryRepository extends Repository implements Category
{
    protected $path = 'Factory\Navigation\Category';

    protected $serviceAll;
    protected $serviceAllHm;
    protected $serviceWhHm;
    protected $serviceWhHmHmCount;
    protected $serviceCategoryHmHmpmHmpmCo;


    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceAll = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceAllHm = app('App\Http\Services\\' . $this->path . '\ServiceAllHm');
        $this->serviceWhHm = app('App\Http\Services\\' . $this->path . '\ServiceWhHm');
        $this->serviceWhHmHmCount = app('App\Http\Services\\' . $this->path . '\ServiceWhHmHmCount');
        $this->serviceCategoryHmHmpmHmpmCo = app('App\Http\Services\\' . $this->path . '\ServiceCategoryHmHmpmHmpmCo');


        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }

}
