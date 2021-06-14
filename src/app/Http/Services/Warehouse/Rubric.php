<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Rubric
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Rubric';
        $this->token = $request->bearerToken();
    }
}
