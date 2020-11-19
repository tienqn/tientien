<?php

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
Route::get('/cache', function () {
    return view('cache');
});
Route::get('/nocache', function () {
    return view('nocache');
});
Route::get('/test', function () {
	// $ems= \DB::select('select * from employees');
	$ems= \DB::select('select * from departments');
	// $ems= \DB::select('select * from dept_manager');
	// $ems= \DB::select('select * from dept_emp');
	// $ems= \DB::select('select * from titles');
	// $ems= \DB::select('select * from salaries');
	dd($ems);
    return 'test';
});