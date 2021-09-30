<?php


namespace App\Http\Services\Library;


abstract class GetAllHmHm
{
    public function getAllHmHm()
    {
        return $this->model::where('project_id', $this->token)
            ->with([
                $this->firstEntity => function($query) {
                    $query->where('project_id', $this->token);
                },
                $this->secondEntity => function($query) {
                    $query->where('project_id', $this->token);
                }
            ])
            ->get();
    }
}
