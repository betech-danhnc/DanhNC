<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModule extends Model
{
    protected $fillable = [
        'name', 'description', 'status', 'created_by'
    ];
}
