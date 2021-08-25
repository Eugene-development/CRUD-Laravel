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



//        $comments = Comment::with(['commentable' => function (MorphTo $morphTo) {
//            $morphTo->constrain([
//                Post::class => function (Builder $query) {
//                    $query->whereNull('hidden_at');
//                },
//                Video::class => function (Builder $query) {
//                    $query->where('type', 'educational');
//                },
//            ]);
//        }])->get();


        return $this->model::where('project_id', $this->token)//Определяем рубрику проекта
            ->where('id', $param)
            ->with([
                $this->thirdEntity => function($query) {
                    $query->where('project_id', $this->token);
                },
                $this->firstEntity . "." . $this->secondEntity => function($query) {
                    $query->where('project_id', $this->token);
                },//все продукты проекта
                $this->firstEntity . "." . $this->thirdEntity => function($query) {
                    $query->where('project_id', $this->token);
                }, //текст категории (полиморф)
                $this->firstEntity . "." . $this->secondEntity  . "." . 'image' => function($query) {
                    $query->where('project_id', $this->token);
                },//изображение продукта (полиморф)
                $this->firstEntity => function($query) {
                    $query->where('project_id', $this->token)
                          ->withCount($this->secondEntity);
                },// количество продуктов в категории
            ])
            ->get();
    }
}
