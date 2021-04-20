<?php


namespace App\Http\Services\Library;


abstract class GetOne
{
    private $param;
    public function __construct($param)
    {
        $this->param = $param;
    }


    public function getOne($param)
    {
//        return $this->model::where('id', $param)
//            ->first();

                return $this->model::where('id', $param)->with(['category', 'image'])->get();
    }
}
