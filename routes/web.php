<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {

  return $_SERVER['REMOTE_ADDR'];
});
