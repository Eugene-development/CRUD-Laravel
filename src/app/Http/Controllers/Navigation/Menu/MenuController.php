<?php


namespace App\Http\Controllers\Navigation\Menu;


use App\Http\Contracts\Navigation\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    protected $entity;
    protected $data;

    function __construct(Request $request)
    {
//        $token = $request->bearerToken();
//                dd('123');
        $this->entity = Menu::class;

        $this->data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ];

    }
}
