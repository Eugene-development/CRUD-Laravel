<?php


namespace App\Http\Services\Library;


class GetWhHmHmpmHmpmCo
{
    public function getCategoryHmHmpmHmpmCo($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with([
                $this->firstEntity  => function($query) {
                    $query->where('project_id', $this->token);
                },//все продукты проекта
                $this->firstEntity . "." . $this->thirdEntity => function($query) {
                    $query->where('project_id', $this->token);
                }, //текст категории (полиморф)
                $this->firstEntity . "." . $this->secondEntity => function($query) {
                    $query->where('project_id', $this->token);
                },//изображение продукта (полиморф)
                $this->firstEntity => function($query) {
                    $query->where('project_id', $this->token)
                        ->withCount($this->secondEntity);
                },// количество продуктов в категории
            ])
            ->withCount($this->firstEntity)
            ->get();
    }
}
