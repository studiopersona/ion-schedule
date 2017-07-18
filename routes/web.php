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
use Illuminate\Support\Collection;
use \GuzzleHttp\Client;

Route::get('/', function () {
	// setup week dates
	$scheduleDates = [];

	for($i = 0; $i <= 7; $i++) {
		array_push($scheduleDates, [
			'apiDate' => date('Y-m-d', strtotime('now +'.$i.' day')),
			'airDay' => (date('Y-m-d', strtotime('now +'.$i.' day')) === date('Y-m-d')) ? 'Today' : date('D', strtotime('now +'.$i.' day')),
			'airDate' => date('M j', strtotime('now +'.$i.' day')),
			'selected' => ($i === 0),
		]);
	}

	$scheduleDates = json_encode($scheduleDates);

	// get schedules for the week
	$client = new Client();
    $res = $client->request('GET', 'https://dev-api.iontelevision.com/1.0/schedule/', [
        'query' => [
            'date' => date('Y-m-d'),
        ]
    ]);

    $response = new Collection(json_decode((string)$res->getBody()));

    $featured = json_encode($response->take(1)->values()[0]->featured);

    $schedules = $response->map(function($date, $index) {
    	return $date->schedule;
    })
    ->values()
    ->toJson();

    return view('index', compact('scheduleDates', 'schedules', 'featured'));
});
