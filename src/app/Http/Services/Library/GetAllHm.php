<?php


namespace App\Http\Services\Library;


abstract class GetAllHm
{
    public function getAllHm()
    {
//        dd($this->token);

        return $this->model::with($this->withEntity)
            ->get();
    }
}
