<?php


namespace App\Http\Services\Library;


abstract class Delete
{
    public function delete($param)
    {
        $this->model::where('project_id', $this->token)
            ->find($param)
            ->delete();
    }
}
