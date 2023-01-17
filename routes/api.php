<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::apiResource('/v1/exercise', ExerciseController::class);

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});
