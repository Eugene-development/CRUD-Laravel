<?php

use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\Navigation\Category\CategoryController;
use App\Http\Controllers\Navigation\Head\HeadController;
use App\Http\Controllers\Navigation\Menu\MenuController;
use App\Http\Controllers\Navigation\Rubric\RubricController;
use App\Http\Controllers\Text\TextController;
use Illuminate\Support\Facades\Route;


Route::get('/get-WhCategory-HmProduct-HmImageProduct-HmTextProduct-CoPruduct/{param}', [CategoryController::class, 'getCategoryHmHmpmHmpmCo']);
//Route::get('/get-WhCategory-HmProduct-HmImageProduct-HmTextProduct-CoPruduct/{param}', [CategoryController::class, 'getWhHmHmCount']);





/*
|--------------------------------------------------------------------------
| getOne
|--------------------------------------------------------------------------
|
| Получить одно по параметру
|
*/

Route::get('/get-one-product/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-text/{id}', [TextController::class, 'getOne']);



/*
|--------------------------------------------------------------------------
| getAll
|--------------------------------------------------------------------------
|
| Получить всё
|
*/

Route::get('/get-all-text', [TextController::class, 'getAll']);


/*
|--------------------------------------------------------------------------
| getAllHm
|--------------------------------------------------------------------------
|
| Получить всё с вложением
|
*/

//Получение полного списка с отношением HM SEO. Поправить нэйминг в круде и на фронте (get-all-menu-seo)
Route::get('/get-all-menu', [MenuController::class, 'getAllHm']);
Route::get('/get-all-head', [HeadController::class, 'getAllHm']);
Route::get('/get-all-rubric', [RubricController::class, 'getAllHm']);
Route::get('/get-all-category', [CategoryController::class, 'getAllHm']);
Route::get('/get-all-product/', [ProductController::class, 'getAllHm']);

//Получить все заголовки с рубриками
Route::get('/get-all-head-rubric', [HeadController::class, 'getAllHm']);

//Получить все категории с СЕО
Route::get('/get-all-category-seo', [CategoryController::class, 'getAllHm']);


/*
|--------------------------------------------------------------------------
| getAllHmCount
|--------------------------------------------------------------------------
|
| Description
|
*/

//Получить все рубрики с категориями и количеством продукции в каждой категории
Route::get('/get-all-rubric-category-count-product', [RubricController::class, 'getAllHmCount']);


/*
|--------------------------------------------------------------------------
| getWhHmHmCount
|--------------------------------------------------------------------------
|
| Получить по условию с двумя вложениями и подсчётом
|
*/

//Получить рубрику со всеми категориями и количеством товара с описанием
Route::get('/get-where-rubric-category-count-text/{param}', [RubricController::class, 'getWhHmHmCount']);


/*
|--------------------------------------------------------------------------
| add
|--------------------------------------------------------------------------
|
| Добавление сущностей
|
*/

Route::post('/add-menu', [MenuController::class, 'add']);
Route::post('/add-head', [HeadController::class, 'add']);
Route::post('/add-category', [CategoryController::class, 'add']);
Route::post('/add-product', [ProductController::class, 'add']);
Route::post('/add-text', [TextController::class, 'add']);


/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
| Обновление сущностей
|
*/

Route::put('/update-menu', [MenuController::class, 'update']);
Route::put('/update-head', [HeadController::class, 'update']);
Route::put('/update-rubric', [RubricController::class, 'update']);
Route::put('/update-category', [CategoryController::class, 'update']);
Route::put('/update-product', [ProductController::class, 'update']);
Route::put('/update-text', [TextController::class, 'update']);


/*
|--------------------------------------------------------------------------
| delete
|--------------------------------------------------------------------------
|
| Удаление сущностей
|
*/

Route::delete('/delete-menu/{id}', [MenuController::class, 'delete']);
Route::delete('/delete-head/{id}', [HeadController::class, 'delete']);
Route::delete('/delete-rubric/{id}', [RubricController::class, 'delete']);
Route::delete('/delete-category/{id}', [CategoryController::class, 'delete']);
Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);
Route::delete('/delete-text/{id}', [TextController::class, 'delete']);






//Menu
Route::get('/get-all', [MenuController::class, 'getAll']); //НЕ рабочий
//Route::get('/get-all-menu', [MenuController::class, 'getAllHm']);
//Route::post('/add-menu', [MenuController::class, 'add']);
//Route::put('/update-menu', [MenuController::class, 'update']);
//Route::delete('/delete-menu/{id}', [MenuController::class, 'delete']);

//Head
//Route::get('/get-all-head', [HeadController::class, 'getAllHm']);
//Route::get('/get-all-head-rubric', [HeadController::class, 'getAllHm']);
//Route::post('/add-head', [HeadController::class, 'add']);
//Route::put('/update-head', [HeadController::class, 'update']);
//Route::delete('/delete-head/{id}', [HeadController::class, 'delete']);

//Rubric
//Route::get('/get-all-rubric', [RubricController::class, 'getAllHm']);
//Route::get('/get-all-rubric-category-count-product', [RubricController::class, 'getAllHmCount']);
//Route::get('/get-where-rubric-category-count-text/{param}', [RubricController::class, 'getWhHmHmCount']);
//Route::post('/add-rubric', [RubricController::class, 'add']);
//Route::put('/update-rubric', [RubricController::class, 'update']);
//Route::delete('/delete-rubric/{id}', [RubricController::class, 'delete']);

//Category
//Route::get('/get-all-category', [CategoryController::class, 'getAllHm']);
//Route::get('/get-all-category-seo', [CategoryController::class, 'getAllHm']);
Route::get('/get-category-seo/{id}', [CategoryController::class, 'getWhHm']);
//Route::post('/add-category', [CategoryController::class, 'add']);
//Route::put('/update-category', [CategoryController::class, 'update']);
//Route::delete('/delete-category/{id}', [CategoryController::class, 'delete']);

//Product
//Route::get('/get-one-product/{id}', [ProductController::class, 'getOne']);
//Route::get('/get-all-product/', [ProductController::class, 'getAllHm']);
Route::get('/get-where-product/{param}', [ProductController::class, 'getWh']);
Route::get('/get-search-product/{search}', [ProductController::class, 'getSearch']);
//Route::post('/add-product', [ProductController::class, 'add']);
//Route::put('/update-product', [ProductController::class, 'update']);
//Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);

//Text
//Route::get('/get-one-text/{id}', [TextController::class, 'getOne']);
//Route::get('/get-all-text/', [TextController::class, 'getAll']);
Route::get('/get-where-text/{param}', [TextController::class, 'getWh']);
//Route::post('/add-text', [TextController::class, 'add']);
//Route::put('/update-text', [TextController::class, 'update']);
//Route::delete('/delete-text/{id}', [TextController::class, 'delete']);
