<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Post
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Post';
        $this->token = $request->bearerToken();

    }

}
