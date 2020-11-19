<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/upload', function(Request $request) {
$path = Storage::disk('s3')->put('images/originals', $request->file, 'public');
return response()->json($path);
});

Route::get('/users', function(Request $request) {
	$users = DB::select('select * from employees  limit 10000');
$users2 = DB::select('select * from salaries  limit 10000');

	return response()->json($users);
});
