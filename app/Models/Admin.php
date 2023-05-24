<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;

class Admin extends ModelAuthenticate
{
    protected $table = "admin";
}
