<?php


namespace App\Http\Services\Library;


abstract class GetAllHmCount
{
    public function getAllHmCount()
    {
        return $this->model::where('project_id', $this->token)
            ->with([$this->withEntity => function($query) {
                $query->withCount($this->countEntity);
            }])
            ->get();
    }
}
