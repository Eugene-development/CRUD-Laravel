<?php


namespace App\Http\Services\Library;


abstract class GetWhHmHmCount
{
    public function getWhHmHmCount($param)
    {
//       dd($this->model::
//            where('id', $param)
//            ->with([
//                $this->firstEntity . "." . $this->thirdEntity,
//                $this->firstEntity . "." . $this->secondEntity . "." . 'image',
//                $this->firstEntity => function($query) {
//                    $query->withCount($this->secondEntity);
//                },
//            ])
//            ->get());
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with([
                $this->firstEntity . "." . $this->thirdEntity,
                $this->firstEntity . "." . $this->secondEntity . "." . 'image',
                $this->firstEntity => function($query) {
                    $query->withCount($this->secondEntity);
                },
            ])
            ->get();
    }
}
