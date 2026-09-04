<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Keep-alive untuk demo portfolio di Render: GitHub Actions memanggil
// endpoint ini pada jam kerja agar service tidak idle dan Aiven menerima
// aktivitas query. Token dibandingkan constant-time; tanpa token -> 404.
Route::get('/keepalive', function (Request $request) {
    $expectedToken = (string) env('KEEPALIVE_TOKEN');
    $providedToken = (string) $request->header('X-Keepalive-Token');

    if ($expectedToken === '' || ! hash_equals($expectedToken, $providedToken)) {
        abort(404);
    }

    DB::select('SELECT 1');

    return response()->json([
        'status' => 'ok',
        'database' => 'connected',
    ]);
});
