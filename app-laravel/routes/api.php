<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/test-auth', function () {
    return 'ok';
});
