<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Create
{
    public function add(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
            'category_id' => $request->category,
            'unit' => $request->unit,
            'description' => $request->description
        ];
        $container = app();
        $response = $container->make($this->entity)->create($data);
        return $response;
    }
}
