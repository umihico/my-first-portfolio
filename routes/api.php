<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::any('/msg', function () {
    \Illuminate\Support\Facades\Log::channel('slack')->critical(json_encode(request()->all(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    return 200;
});