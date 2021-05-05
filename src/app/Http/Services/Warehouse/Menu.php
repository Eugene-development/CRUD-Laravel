<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Menu
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Menu';
        $this->token = $request->bearerToken();

    }
}
