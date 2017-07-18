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
use Illuminate\Http\Request;


Route::get('/', function () {
	$scheduleDates = [];

	for($i = 0; $i < 7; $i++) {
		array_push($scheduleDates, [
			'apiDate' => date('Y-m-d', strtotime('now +'.$i.' day')),
			'airDay' => (date('D', strtotime('now +'.$i.' day')) === date('D')) ? 'Today' : date('D', strtotime('now +'.$i.' day')),
			'airDate' => date('M j', strtotime('now +'.$i.' day')),
			'selected' => ($i === 0),
		]);
	}

	$scheduleDates = json_encode($scheduleDates);

    return view('index', compact('scheduleDates'));
});

Route::get('/schedule', function(Request $request) {
	dump('WTF!!!!!');
});
