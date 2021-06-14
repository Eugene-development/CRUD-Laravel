<?php


namespace App\Http\Services\Library;


abstract class GetWh
{
    public function getWh($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->all();
    }

}
