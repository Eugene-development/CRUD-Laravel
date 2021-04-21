<?php

use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\Navigation\Category\CategoryController;
use App\Http\Controllers\Navigation\Head\HeadController;
use App\Http\Controllers\Navigation\Menu\MenuController;
use App\Http\Controllers\Navigation\Rubric\RubricController;
use App\Http\Controllers\Text\TextController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Menu
Route::get('/get-all', [MenuController::class, 'getAll']);
Route::get('/get-all-menu', [MenuController::class, 'getAllHm']);
Route::post('/add-menu', [MenuController::class, 'add']);
Route::put('/update-menu', [MenuController::class, 'update']);
Route::delete('/delete-menu/{id}', [MenuController::class, 'delete']);

//Head
Route::get('/get-all-head', [HeadController::class, 'getAll']);
Route::get('/get-all-head-rubric', [HeadController::class, 'getAllHm']);
Route::post('/add-head', [HeadController::class, 'add']);
Route::put('/update-head', [HeadController::class, 'update']);
Route::delete('/delete-head/{id}', [HeadController::class, 'delete']);

//Rubric
Route::get('/get-all-rubric', [RubricController::class, 'getAll']);
Route::get('/get-all-rubric-category-count-product', [RubricController::class, 'getAllHmCount']);
Route::get('/get-where-rubric-category-count-text/{param}', [RubricController::class, 'getWhHmHmCount']);
Route::post('/add-rubric', [RubricController::class, 'add']);
Route::put('/update-rubric', [RubricController::class, 'update']);
Route::delete('/delete-rubric/{id}', [RubricController::class, 'delete']);

//Category
Route::get('/get-all-category', [CategoryController::class, 'getAll']);
Route::get('/get-all-category-seo', [CategoryController::class, 'getAllHm']);
Route::get('/get-category-seo/{id}', [CategoryController::class, 'getWhHm']);
Route::post('/add-category', [CategoryController::class, 'add']);
Route::put('/update-category', [CategoryController::class, 'update']);
Route::delete('/delete-category/{id}', [CategoryController::class, 'delete']);

//Product
Route::get('/get-one-product/{id}', [ProductController::class, 'getOne']);
Route::get('/get-all-product/', [ProductController::class, 'getAll']);
Route::get('/get-where-product/{param}', [ProductController::class, 'getWh']);
Route::get('/get-search-product/{search}', [ProductController::class, 'getSearch']);
Route::post('/add-product', [ProductController::class, 'add']);
Route::put('/update-product', [ProductController::class, 'update']);
Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);

//Text
Route::get('/get-one-text/{id}', [TextController::class, 'getOne']);
Route::get('/get-all-text/', [TextController::class, 'getAll']);
Route::get('/get-where-text/{param}', [TextController::class, 'getWh']);
Route::post('/add-text', [TextController::class, 'add']);
Route::put('/update-text', [TextController::class, 'update']);
Route::delete('/delete-text/{id}', [TextController::class, 'delete']);
