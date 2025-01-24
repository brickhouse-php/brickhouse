<?php

namespace App\Config;

use Brickhouse\Cache\CacheConfig;
use Brickhouse\Cache\ArrayCache;

return new CacheConfig(
    default: 'array',
    providers: [
        'array' => new ArrayCache,

        /**
         * Defines the cache provider for caching view templates.
         */
        'views' => new ArrayCache,
    ]
);
