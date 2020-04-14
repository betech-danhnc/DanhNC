<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminController extends Model
{
    protected $fillable = [
        'name', 'description','module_id', 'status', 'created_by',
    ];
}
