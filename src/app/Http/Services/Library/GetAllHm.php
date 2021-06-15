<?php


namespace App\Http\Services\Library;


abstract class GetAllHm
{
    public function getAllHm()
    {
        return $this->model::where('project_id', $this->token)
            ->with([$this->withEntity => function($query) {
                $query->where('project_id', $this->token);
            }])
            ->get();
    }
}
