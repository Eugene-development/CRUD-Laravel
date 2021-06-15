<?php


namespace App\Http\Services\Library;


abstract class GetAllHmHm
{
    public function getAllHmHm()
    {
        return $this->model::where('project_id', $this->token)
            ->with([$this->withEntity . $this->subEntity => function($query) {
                $query->where('project_id', $this->token);
            }])
            ->get();
    }
}
