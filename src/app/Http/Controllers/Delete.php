<?php


namespace App\Http\Controllers;


trait Delete
{
    //SuperMethod
    public function delete()
    {
        $container = app();
        $container->make($this->entity)->delete($this->param);
        return $this->param;
    }
}
