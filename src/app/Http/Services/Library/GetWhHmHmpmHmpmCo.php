<?php


namespace App\Http\Services\Library;


class GetWhHmHmpmHmpmCo
{
    public function getCategoryHmHmpmHmpmCo($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with([
                $this->thirdEntity  => function($query) {
                    $query->where('project_id', $this->token);
                }, //текст категории (полиморф)
                $this->firstEntity => function($query) {
                    $query->where('project_id', $this->token);
                },//все продукты проекта
                $this->firstEntity . "." . $this->thirdEntity => function($query) {
                    $query->where('project_id', $this->token);
                }, //текст продукта (полиморф)
                $this->firstEntity . "." . $this->secondEntity => function($query) {
                    $query->where('project_id', $this->token);
                },//изображение продукта (полиморф)
                $this->fourtEntity => function($query) {
                    $query->where('project_id', $this->token);
                } // seo
            ])
            ->withCount($this->firstEntity)// количество продуктов в категории
            ->get();
    }
}
