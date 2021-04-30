<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Catalog
{


//    protected $model;
//
//    function __construct()
//    {
//        $this->model = 'App\Models\Product';
//    }
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Product';
        $this->token = $request->bearerToken();
    }
}
