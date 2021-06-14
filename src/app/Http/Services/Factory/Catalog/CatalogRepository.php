<?php


namespace App\Http\Services\Factory\Catalog;


use App\Http\Contracts\Production\Catalog;
use App\Http\Services\Factory\Repository;

final class CatalogRepository extends Repository implements Catalog
{
    protected $path = 'Factory\Catalog';

    protected $serviceOne;
    protected $serviceAllHm;
    protected $serviceAll;
    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceOne = app('App\Http\Services\\' . $this->path . '\ServiceOne');
        $this->serviceAllHm = app('App\Http\Services\\' . $this->path . '\ServiceAllHm');

        $this->serviceAll = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }
}
