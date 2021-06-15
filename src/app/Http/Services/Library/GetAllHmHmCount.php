<?php


namespace App\Http\Services\Library;


abstract class GetAllHmHmCount
{
    public function getAllHmHmCount()
    {
        return $this->model::where('project_id', $this->token)
            ->with([$this->withEntity . $this->subEntity => function($query) {
                $query->where('project_id', $this->token)
                      ->withCount($this->countEntity);
            }])
            ->get();
    }
}
