<?php

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
	$scheduleDates = [];

	for($i = 0; $i < 7; $i++) {
		array_push($scheduleDates, [
			'apiDate' => date('Y-m-d', strtotime('now +'.$i.' day')),
			'airDay' => date('D', strtotime('now +'.$i.' day')),
			'airDate' => date('M j', strtotime('now +'.$i.' day')),
		]);
	}

	$scheduleDates = json_encode($scheduleDates);

    return view('index', compact('scheduleDates'));
});
