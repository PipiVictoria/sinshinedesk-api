<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedroomController;
use App\Http\Controllers\TablePositionController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CampController;
use App\Http\Controllers\ParticipateEventController;
use App\Http\Controllers\MealCategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Ecris le nom de la ressource en miniscule "user" 
Route::apiResource('user', UserController::Class);

Route::apiResource('bedroom', BedroomController::Class);

Route::apiResource('tablePosition', TablePositionController::Class);

Route::apiResource('meal', MealController::Class);

Route::apiResource('drinks', DrinksController::Class);

Route::apiResource('stock', StockController::Class);

Route::apiResource('reservation', ReservationController::Class);

Route::apiResource('account', AccountController::Class);

Route::apiResource('event', EventController::Class);
Route::apiResource('camp', CampController::Class);
Route::apiResource('participateEvent', ParticipateEventController::Class);

Route::apiResource('mealCategories', mealCategoriesController::Class);