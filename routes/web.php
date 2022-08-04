<?php

use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::group(['middleware'=>'auth:sanctum','prefix'=>'admin'], function(){
    Route::get('/',[MainController::class, 'index'])->name('admin.index');
    Route::resources([
        'action'=>\App\Http\Controllers\ActionController::class,
    ]);
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

    Route::group(['middleware' => 'auth','prefix'=>'dashboard'], function() {

        Route::resources([
            'action'=>\App\Http\Controllers\ActionController::class,
            'alarm'=>\App\Http\Controllers\AlarmController::class,
            'category'=>\App\Http\Controllers\CategoryController::class,
            'city'=>\App\Http\Controllers\CityController::class,
            'contakt'=>\App\Http\Controllers\ContaktController::class,
            'customer'=>\App\Http\Controllers\CustomerController::class,
            'detected'=>\App\Http\Controllers\DetectedController::class,
            'district'=>\App\Http\Controllers\DistrictController::class,
            'document'=>\App\Http\Controllers\DocumentController::class,
            'event'=>\App\Http\Controllers\EventController::class,
            'group'=>\App\Http\Controllers\GroupController::class,
            'main'=>\App\Http\Controllers\MainController::class,
            'make'=>\App\Http\Controllers\MakeController::class,
            'objekt'=>\App\Http\Controllers\ObjektController::class,
            'position'=>\App\Http\Controllers\PositionController::class,
            'reason'=>\App\Http\Controllers\ReasonController::class,
            'oldcustomer'=>\App\Http\Controllers\OldcustomerController::class,
        ]);
});
