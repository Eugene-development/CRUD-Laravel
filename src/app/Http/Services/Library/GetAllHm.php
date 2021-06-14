<?php


namespace App\Http\Services\Library;


abstract class GetAllHm
{
    public function getAllHm()
    {
        return $this->model::where('project_id', $this->token)
            ->with($this->withEntity)
            ->get();
    }
}
