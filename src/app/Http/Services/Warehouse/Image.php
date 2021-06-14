<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Image
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Image';
        $this->token = $request->bearerToken();
    }
}
