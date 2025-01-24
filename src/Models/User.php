<?php

namespace App\Models;

use Brickhouse\Database\IsModel;
use Brickhouse\Database\Model;

class User implements Model
{
    use IsModel;

    public string $name;

    public string $email;

    public string $password;
}
