<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employe  extends Authenticatable
{
    protected $guard='employe';
}
