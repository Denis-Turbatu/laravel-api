<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// nel URL '/projects' richiamo il metodo index() presente in ProjectController
Route::get('/projects', [ApiController::class, 'index']);
Route::get('/projects/{slug}', [ApiController::class, 'show']);
