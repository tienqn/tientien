<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

Route::get('/cache', function(Request $request) {
	$employees = Redis::get('employees');
	$salaries = Redis::get('salaries');

	if(Redis::exists('employees') && Redis::exists('salaries')) {
		$expire_employees = Redis::ttl('employees');
		$expire_salaries = Redis::ttl('salaries');

		return response()->json([
			'data' => [
				'employees' => json_decode($employees),
				'salaries' => json_decode($salaries),
				'expire_employees' => $expire_employees,
				'expire_salaries' => $expire_salaries,
			]
		]);
	}

	$employees = DB::select('select * from employees  limit 10000');
	Redis::set('employees', json_encode($employees));
	Redis::expire('employees', 900000);

	$salaries = DB::select('select * from salaries  limit 10000');
	Redis::set('salaries', json_encode($salaries));
	Redis::expire('salaries', 900000);
	
	return response()->json([
		'data' => [
			'cache' => false,
			'employees' => $employees,
			'salaries' => $salaries
		]
	]);
});

Route::get('/nocache', function(Request $request) {
	
	$salaries = DB::select('select * from salaries  limit 10000');
	$employees = DB::select('select * from employees  limit 10000');
	
	return response()->json([
		'data' => [
			'employees' => $employees,
			'salaries' => $salaries
		]
	]);
});
