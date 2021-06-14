<?php


namespace App\Http\Services\Library;


abstract class Update
{
    public function update($param, $data)
    {
        $this->model::where('project_id', $this->token)
            ->find($param)
            ->update($data);
    }
}
