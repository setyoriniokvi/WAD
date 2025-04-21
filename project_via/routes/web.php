<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpicySnacksController;

Route::get('snacks', [SpicySnacksController::class, 'index']);

