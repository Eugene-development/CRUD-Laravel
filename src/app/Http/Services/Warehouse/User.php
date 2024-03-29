<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait User
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\User';
        $this->token = $request->bearerToken();
    }
}
