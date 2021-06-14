<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Category
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Category';
        $this->token = $request->bearerToken();
    }
}
