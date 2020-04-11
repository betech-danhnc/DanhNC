<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class AdminModule extends Model
{
    protected $fillable = [
        'name', 'description', 'status', 'created_by'
    ];
}
