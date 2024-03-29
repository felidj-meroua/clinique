<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
