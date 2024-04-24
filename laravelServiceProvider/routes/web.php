<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\MyController;
use App\Demo\DemoFile;
use App\Service\DemoFacadeService;

//use App\Http\Controllers\MyFacadeController;
//use App\Service\TestService;
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

Route::get('/custom', [CustomController::class, 'doCustom']);

Route::get('/my-custom-func', [MyController::class, 'doMyCustomFunc'])->name('my-custom-func');

Route::get('/custom-facade', function () {
    return DemoFile::doDemoFunc();
});

Route::get('/demo-facade-route', function () {
        return DemoFacadeService::doDemoFacadeFunc();
});
//Route::get('/test-facade-from-controller', [MyController::class, 'test_facade']);
//Route::get('/demo-facade', [MyFacadeController::class, 'demo_facade']);
// Route::get('/test-facade', function () {
//     return TestService::testServFunc();
// });