<?php


namespace App\Http\Controllers;


trait Update
{
    //SuperMethod
    public function update()
    {
        $container = app();
        $container->make($this->entity)->update($this->param, $this->data);
        return $this->data;
    }

}
