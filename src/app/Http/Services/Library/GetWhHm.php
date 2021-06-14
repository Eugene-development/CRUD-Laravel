<?php


namespace App\Http\Services\Library;


abstract class GetWhHm
{
    public function getWhHm($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with($this->withEntity)
            ->get();
    }
}
