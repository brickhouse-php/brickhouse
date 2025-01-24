<?php

namespace App\Config;

use Brickhouse\Log\Handler\ConsoleHandler;
use Brickhouse\Log\LogConfig;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

return new LogConfig(
    default: 'app',
    channels: [
        'app' => [
            new ConsoleHandler(Level::Info),
            new StreamHandler(storage_path('logs', 'app.log')),
        ],
        'http' => [
            // Comment the next line to prevent logging HTTP requests to the console.
            new ConsoleHandler(Level::Debug),
            new StreamHandler(storage_path('logs', 'http.log')),
        ],
    ]
);
