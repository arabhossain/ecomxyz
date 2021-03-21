<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//$router->get('/', function() {
//    return \Illuminate\Support\Str::random(32);
//});
$router->get('/', [function() {
    $data = [ "arab", "emon"];
    $response = \Illuminate\Support\Facades\Http::get('orders_service/orders');
    $data  = array_merge((array) $response->json(), $data);
    return response()->json($data);
}]);
