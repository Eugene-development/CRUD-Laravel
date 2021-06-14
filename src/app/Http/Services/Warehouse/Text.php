<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Text
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Text';
        $this->token = $request->bearerToken();
    }
}
