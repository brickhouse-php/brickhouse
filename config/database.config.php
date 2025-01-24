<?php

namespace App\Config;

use Brickhouse\Database\DatabaseConfig;
use Brickhouse\Database\Sqlite\SqliteConnectionString;

return new DatabaseConfig(
    connections: [
        new SqliteConnectionString(storage_path("database.sqlite")),
    ]
);
