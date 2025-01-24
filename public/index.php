<?php

use Brickhouse\Core\Application;

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap the application.
$application = Application::create(basePath: __DIR__ . '/../');

if ($application->runningAsWorker()) {
    // Worker callback, which will be invoked on every new request.
    $handler = static function () use ($application) {
        $application->handleRequest();
    };

    // If the application is running as a worker, enqueue the worker callback.
    // Workers will always re-use the same application instance for multiple requests.
    $application->enqueueWorker($handler);
} else {
    // If the application is not running as a worker, handle the current request and exit.
    $application->handleRequest();
}

exit(0);
