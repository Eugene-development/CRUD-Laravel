<?php


namespace App\Http\Services\Library;


class GetWhHmHmpmHmpmCo
{
    public function getCategoryHmHmpmHmpmCo($param)
    {


        return $this->model::where('project_id', $this->token)->where('id', $param)->get();
    }
}
