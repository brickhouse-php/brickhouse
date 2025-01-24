<?php

use Brickhouse\Http\Router;

Router::root(fn() => render('index'));

Router::get('greeting', \App\Controllers\GreetingController::class);
