<?php

namespace App\Config;

use Brickhouse\Core\AppConfig;

return new AppConfig(
    /**
     * Defines whether the application is in debug-mode.
     */
    debug: env("APP_DEBUG", false),

    /**
     * Defines whether only API endpoints should be exposed.
     */
    api_only: false,
);
