<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Seo
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Seo';
        $this->token = $request->bearerToken();
    }
}
