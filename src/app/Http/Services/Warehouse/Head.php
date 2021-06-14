<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Head
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Head';
        $this->token = $request->bearerToken();
    }
}
