<?php


namespace App\Http\Controllers;

trait Create
{
    //SuperMethod
    public function add()
    {
        $container = app();
        $response = $container->make($this->entity)->create($this->data);
        return $response;
    }
}
