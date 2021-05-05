<?php


namespace App\Http\Controllers\Navigation\Menu;


use App\Http\Contracts\Navigation\Menu;
use App\Http\Controllers\Controller;




class MenuController extends Controller
{
    protected $entity;

    function __construct()
    {
//        $token = $request->bearerToken();
//                dd('123');
        $this->entity = Menu::class;
    }
}
